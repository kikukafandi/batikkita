<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'price',
        'subtotal', // <-- Jangan lupa tambahkan subtotal juga jika ada di logikanya
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
