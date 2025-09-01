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
    protected $fillable = ['username', 'password'];
    public function tampilan()
    {
        return $this->hasOne(Tampilan::class, 'admin_id', 'id');
    }
>>>>>>> 9d760ca3b9a1edb5979a059f770aceed65a1c1e2
}
