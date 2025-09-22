<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class semua extends Model
{
    //
    use HasFactory;

    protected $table = 'semua';

    protected $fillable = [
        'warna',
        'font_utama',
        'font_heading',

    ];
}
