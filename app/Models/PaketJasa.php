<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketJasa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'deskripsi',
        'harga',
        'gambar',
    ];
    protected $table = 'paket_jasa';

    public function pesanan()
    {
        return $this->hasOne(Pesanan::class);
    }
}
