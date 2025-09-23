<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kepalasekolah extends Model
{
    //
    protected $table = 'kepalasekolah';

    protected $fillable = [
        'nama',
        'konten',
        'gambar',
        'tanggal',
    ];
}
