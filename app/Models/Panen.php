<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panen extends Model
{
    use HasFactory;

    protected $table = 'panens'; // Pastikan sesuai nama tabel di database

    protected $fillable = [
        'tanggal',
        'kuantitas',
    ];

    protected $dates = ['tanggal']; // Jika menggunakan format date
}
