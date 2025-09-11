<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class hero extends Model
{
    //
    use HasFactory;

    protected $table = 'hero';
    protected $fillable = [
        'font_size',
        'font_color',
        'font',
        'image',
    ];
}
