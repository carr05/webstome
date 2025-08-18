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
    protected $fillable = ['username', 'password', 'layout_choice'];
=======
    protected $fillable = ['username', 'password', 'layout'];
>>>>>>> db43bc6151149c3be40e3b67218ba6ea55f956d7
}
