<?php

// routes/web.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminControler;


Route::get('/', [adminControler::class, 'formLogin'])->name('login');
Route::post('/login', [adminControler::class, 'prosesLogin'])->name('login.post');
Route::get('/home', [adminControler::class, 'home'])->name('home');
Route::get('/layout', [adminControler::class, 'layout'])->name('layout1');
<<<<<<< HEAD
Route::get('/logout', action: [adminControler::class, 'logout'])->name('logout');
=======
Route::get('/berita', [adminControler::class, 'berita'])->name('berita');
Route::get('/logout', [adminControler::class, 'logout'])->name('logout');
>>>>>>> af48d9acd33bc007568c15e9cbeb6ca464dece3b
