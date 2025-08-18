<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class school extends Model
{
    protected $table = 'school';
    protected $fillable = [
        'name', 'subdomain',
    ];
}
