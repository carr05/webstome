<?php

// routes/web.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminControler;


Route::get('/', [adminControler::class, 'formLogin'])->name('login');
Route::post('/login', [adminControler::class, 'prosesLogin'])->name('login.post');
Route::get('/home', [adminControler::class, 'home'])->name('home');

Route::get('/layout', [adminControler::class, 'layout'])->name('layout1');

Route::get('/logout', action: [adminControler::class, 'logout'])->name('logout');

Route::get('/berita', [adminControler::class, 'berita'])->name('berita');

Route::get('/logout', [adminControler::class, 'logout'])->name('logout');

