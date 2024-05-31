<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_wahana',
        'judul',
        'harga'
    ];

    public function wahana()
    {
        return $this->belongsTo(Wahana::class, 'id_wahana');
    }
    public function Penjualan()
    {
        return $this->hasMany(Penjualan::class);
    }
}
