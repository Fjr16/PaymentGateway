<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wahana extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'foto',
        'deskripsi'
    ];

    public function tiket()
    {
        return $this->hasMany(Tiket::class);
    }
}
