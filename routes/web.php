<?php

// routes/web.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminControler;


Route::get('/', [adminControler::class, 'formLogin'])->name('login');
Route::post('/login', [adminControler::class, 'prosesLogin'])->name('login.post');
Route::get('/home', [adminControler::class, 'home'])->name('home');


// Layout
Route::get('/layout1', [adminControler::class, 'layout'])->name('layout1');
Route::get('/layout1/index', [adminControler::class, 'index'])->name('layout1.index');

// Berita (CRUD)
Route::get('/berita', [beritaController::class, 'index'])->name('berita.index');
Route::get('/berita/create', [beritaController::class, 'create'])->name('berita.create');
Route::post('/berita', [beritaController::class, 'store'])->name('berita.store');
Route::get('/berita/{id}/edit', [beritaController::class, 'edit'])->name('berita.edit');
Route::put('/berita/{id}', [beritaController::class, 'update'])->name('berita.update');
Route::delete('/berita/{id}', [beritaController::class, 'destroy'])->name('berita.destroy');

// Agenda

Route::get('/layout', [adminControler::class, 'layout'])->name('layout1');

Route::get('/agenda', [adminControler::class, 'agenda'])->name('agenda');
Route::get('/berita', [adminControler::class, 'berita'])->name('berita');
Route::get('/galeri', [adminControler::class, 'galeri'])->name('galeri');
Route::get('/jurusan', [adminControler::class, 'jurusan'])->name('jurusan');
Route::get('/prestasi', [adminControler::class, 'prestasi'])->name('prestasi');
Route::get('/guru', [adminControler::class, 'guru'])->name('');
Route::get('/staff', [adminControler::class, 'staff'])->name('staff');
Route::get('/alumni', [adminControler::class, 'alumni'])->name('alumni');
Route::get('/ekstrakurikuler', [adminControler::class, 'ekstrakurikuler'])->name('ekstrakurikuler');
Route::get('/karya', [adminControler::class, 'karya'])->name('karya');

Route::get('/logout', action: [adminControler::class, 'logout'])->name('logout');

