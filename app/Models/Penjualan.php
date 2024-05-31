<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'id_tiket',
        'bukti_pembayaran',
        'status',
        'jumlah',
        'harga_total',
        'transaction_id',
        'order_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function tiket()
    {
        return $this->belongsTo(Tiket::class, 'id_tiket');
    }
}
