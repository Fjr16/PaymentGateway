<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'penjualan_id',
        'transaction_id',
        'order_id',
        'transaction_status',
        'transaction_time',
        'payment_type',
        'total_pembayaran',
    ];

    public function penjualan(){
        return $this->belongsTo(Penjualan::class, 'penjualan_id');
    }
}
