@extends('layouts.app')

@section('content')
<h1 class="text-3xl md:text-4xl font-serif font-bold mb-8">Admin Dashboard</h1>

{{-- Ringkasan Data --}}
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8 mb-10">
    <div class="bg-white p-6 rounded-lg shadow-md text-center">
        <h3 class="text-xl font-bold font-serif mb-2">Total Pengguna</h3>
        <p class="text-4xl font-bold text-indigo">{{ number_format($stats['users'], 0, ',', '.') }}</p>
    </div>
    <div class="bg-white p-6 rounded-lg shadow-md text-center">
        <h3 class="text-xl font-bold font-serif mb-2">Total Penjual</h3>
        <p class="text-4xl font-bold text-indigo">{{ number_format($stats['sellers'], 0, ',', '.') }}</p>
    </div>
    <div class="bg-white p-6 rounded-lg shadow-md text-center">
        <h3 class="text-xl font-bold font-serif mb-2">Total Pesanan</h3>
        <p class="text-4xl font-bold text-indigo">{{ number_format($stats['orders'], 0, ',', '.') }}</p>
    </div>
</div>

{{-- List Order Terbaru --}}
<div>
    <h2 class="text-2xl font-serif font-bold mb-4">Pesanan Terbaru</h2>
    <div class="bg-white rounded-lg shadow-md overflow-x-auto">
        <table class="w-full min-w-[700px]">
            <thead class="bg-krem">
                <tr>
                    <th class="text-left font-bold p-3">Order ID</th>
                    <th class="text-left font-bold p-3">Pelanggan</th>
                    <th class="text-left font-bold p-3">Tanggal</th>
                    <th class="text-left font-bold p-3">Total</th>
                    <th class="text-center font-bold p-3">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($recentOrders as $order)
                <tr class="border-b border-krem">
                    <td class="p-3 font-semibold">{{ $order['id'] }}</td>
                    <td class="p-3">{{ $order['customer'] }}</td>
                    <td class="p-3">{{ $order['date'] }}</td>
                    <td class="p-3">{{ $order['total'] }}</td>
                    <td class="p-3 text-center">
                        <span class="bg-green-200 text-green-800 text-sm font-semibold px-3 py-1 rounded-full">{{ $order['status'] }}</span>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection