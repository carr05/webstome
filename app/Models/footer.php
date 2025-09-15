<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class footer extends Model
{
    //
    use HasFactory;
    protected $table = 'footer';
    protected $fillable = [
        'informasi_kontak',
        'link_berguna',
        'layanan',
        'hic_solutastip',
        'nobis_illum',
        'informasi_hak_cipta',
    ];
}
