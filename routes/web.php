<?php

// routes/web.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminControler;
use App\Http\Controllers\beritaController;


Route::get('/', [adminControler::class, 'formLogin'])->name('login');
Route::post('/login', [adminControler::class, 'prosesLogin'])->name('login.post');
Route::get('/home', [adminControler::class, 'home'])->name('home');
Route::get('/layout', [adminControler::class, 'layout'])->name('layout1');

Route::get('/logout', action: [adminControler::class, 'logout'])->name('logout');

Route::get('/berita', [adminControler::class, 'berita'])->name('berita');
Route::get('/berita', [beritaController::class, 'index'])->name('berita.index');
Route::get('/berita/create', [beritaController::class, 'create'])->name('berita.create');
Route::post('/berita', [beritaController::class, 'store'])->name('berita.store');
Route::get('/berita/{id}/edit', [beritaController::class, 'edit'])->name('berita.edit');
Route::put('/berita/{id}', [beritaController::class, 'update'])->name('berita.update');
Route::delete('/berita/{id}', [beritaController::class, 'destroy'])->name('berita.destroy');

Route::get('/agenda', [adminControler::class, 'agenda'])->name('agenda');
Route::get('/layout1/index', [adminControler::class, 'index'])->name('layout1.index');
Route::get('/logout', [adminControler::class, 'logout'])->name('logout');

