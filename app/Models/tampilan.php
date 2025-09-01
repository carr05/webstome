<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class tampilan extends Model
{
    //
   use HasFactory;

    protected $table = 'tampilan';

    protected $fillable = [
        'layout',
        'font_size',
        'warna',
        'font',
    ];
    
}
