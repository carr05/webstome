<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class guru extends Model
{
    //
    protected $table = 'guru';

    protected $fillable = [
        'nama',
        'mapel',
        'gambar',
        'tanggal',
    ];
}
