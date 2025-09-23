<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class staff extends Model
{
    //
    protected $table = 'staff';

    protected $fillable = [
        'nama',
        'bidang_kerja',
        'gambar',
        'tanggal',
    ];
}
