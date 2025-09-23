<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model
{
    protected $table = 'prestasi';
    protected $primaryKey = 'id';

    protected $fillable = [
        'judul',
        'konten',
        'gambar',
        'tanggal',
    ];
}
