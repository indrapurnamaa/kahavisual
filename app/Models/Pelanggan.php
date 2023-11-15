<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Model;

class Pelanggan extends Model
{
    use HasFactory;
    protected $fillable = [
        'username',
        'password',
        'email',
        'nama',
        'telepon',
        'alamat',
    ];
    protected $table = 'pelanggan';
}
