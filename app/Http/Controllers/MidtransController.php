<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Midtrans\Notification;

class MidtransController extends Controller
{
    public function webhook(Request $request)
    {
        // 1. Validasi signature
        $serverKey = config('services.midtrans.server_key');
        $calculatedSignature = hash(
            'sha512',
            $request->order_id .
                $request->status_code .
                $request->gross_amount .
                $serverKey
        );

        if ($request->signature_key !== $calculatedSignature) {
            return response()->json(['message' => 'Invalid signature'], 403);
        }

        // 2. Ambil notifikasi dari Midtrans
        $notification = new Notification();

        $orderIdMidtrans    = $notification->order_id;
        $transactionStatus  = $notification->transaction_status;
        $transactionId      = $notification->transaction_id;

        // 3. Cari order
        $order = null;

        if (Schema::hasColumn('orders', 'midtrans_order_id')) {
            // Kalau ada kolom midtrans_order_id
            $order = Order::where('midtrans_order_id', $orderIdMidtrans)->first();
        } else {
            // Kalau belum ada → ambil dari TRX-{id}-{random}
            $parts = explode('-', $orderIdMidtrans);
            $orderId = $parts[1] ?? null;
            if ($orderId) {
                $order = Order::find($orderId);
            }
        }

        if (!$order) {
            return response()->json(['message' => 'Order not found'], 404);
        }

        // 4. Update status order
        if ($transactionStatus === 'settlement') {
            $order->status = 'paid';
        } elseif (in_array($transactionStatus, ['expire', 'cancel', 'deny'])) {
            $order->status = 'cancelled';
        } elseif ($transactionStatus === 'pending') {
            $order->status = 'pending';
        }

        $order->save();

        // 5. Update data transaksi terkait
        $order->transactions()->where('status', 'pending')->update([
            'status'           => $transactionStatus,
            'transaction_id'   => $transactionId,
            'payment_payload'  => json_encode($notification->getResponse()),
        ]);

        return response()->json(['message' => 'Webhook processed']);
    }
}
