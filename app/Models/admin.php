<?php

// app/Models/admin.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    use HasFactory;

    protected $table = 'dataadmin';
<<<<<<< HEAD
    protected $fillable = ['username', 'password', 'layout'];
=======



    protected $fillable = ['username', 'password', 'layout'];



    

>>>>>>> 435a7c3 (landing web promosi)
    public function tampilan()
    {
        return $this->hasOne(Tampilan::class, 'admin_id', 'id');
    }


}



