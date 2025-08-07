<?php

// routes/web.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminControler;

Route::get('/', [adminControler::class, 'landing'])->name('landing');
Route::get('/login', [adminControler::class, 'formLogin'])->name('login');
Route::post('/login', [adminControler::class, 'prosesLogin'])->name('login.post');
Route::get('/home', [adminControler::class, 'home'])->name('home');
Route::get('/logout', [adminControler::class, 'logout'])->name('logout');
