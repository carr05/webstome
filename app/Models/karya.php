<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class karya extends Model
{
    //
    protected $table = 'karya';

    protected $fillable = [
        'judul',
        'konten',
        'gambar',
        'tanggal',
    ];
}
