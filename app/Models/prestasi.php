<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class prestasi extends Model
{
    //
    protected $table = 'prestasi';

    protected $fillable = [
        'judul',
        'konten',
        'gambar',
        'tanggal',
    ];
}
