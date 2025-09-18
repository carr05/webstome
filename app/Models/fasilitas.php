<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class fasilitas extends Model
{
    //
    protected $table = 'fasilitas';

    protected $fillable = [
        'judul',
        'konten',
        'gambar',
        'tanggal',
    ];
}
