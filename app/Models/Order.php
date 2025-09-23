<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id',
        'address_id',   // <-- Ini yang menyebabkan error
        'total_amount', // <-- Ini juga perlu ditambahkan
        'status',
    ];
    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
    public function address()
    {
        return $this->belongsTo(Address::class);
    }
}
