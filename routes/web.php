<?php

// routes/web.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminControler;

Route::get('/dashboard', function () {
    return 'Welcome Dashboard';
})->middleware('check.subdomain');

Route::get('/', [adminControler::class, 'formLogin'])->name('login');
Route::post('/login', [adminControler::class, 'prosesLogin'])->name('login.post');
Route::get('/home', [adminControler::class, 'home'])->name('home');
Route::post('/save-layout', [adminControler::class, 'saveLayout'])->name('save.layout');
Route::get('/layout', [adminControler::class, 'layout'])->name('layout1');
Route::get('/hero', [adminControler::class, 'hero'])->name('hero');
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

Route::get('/layout1/index', [adminControler::class, 'landing'])->name('layout1.index');
Route::get('/layout2/home', [adminControler::class, 'landing2'])->name('layout2.index');

Route::get('/tamplate', [adminControler::class, 'tamplate'])->name('tamplate');
Route::get('/tamplate', [adminControler::class, 'chooseLayout'])->name('tamplate.choose');

Route::get('/logout', action: [adminControler::class, 'logout'])->name('logout');