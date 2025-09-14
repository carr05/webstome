<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminControler;
use App\Http\Controllers\layoutController;
use App\Http\Controllers\tampilanController;
use App\Http\Controllers\heroController;


Route::get('/haloo', function () {
    return 'Welcome Dashboard';
})->middleware('check.subdomain');

// Autentikasi
Route::get('/', [adminControler::class, 'formLogin'])->name('login');
Route::post('/login', [adminControler::class, 'prosesLogin'])->name('login.post');
Route::get('/logout', [adminControler::class, 'logout'])->name('logout');

// Home & Layout
Route::get('/home', [adminControler::class, 'home'])->name('home');
Route::post('/save-layout', [adminControler::class, 'simpanLayout'])->name('save.layout');
Route::get('/layout', [adminControler::class, 'layout'])->name('layout');

// Tampilan (kustomisasi)

Route::get('/tampilan', [tampilanController::class, 'index'])->name('tampilan.index');
Route::post('/tampilan/update', [tampilanController::class, 'update'])->name('tampilan.update');

// Halaman utama sekolah
Route::get('/hero', [adminControler::class, 'hero'])->name('hero');
Route::get('/agenda', [adminControler::class, 'agenda'])->name('agenda');
Route::get('/berita', [adminControler::class, 'berita'])->name('berita');
Route::get('/galeri', [adminControler::class, 'galeri'])->name('galeri');
Route::get('/jurusan', [adminControler::class, 'jurusan'])->name('jurusan');
Route::get('/prestasi', [adminControler::class, 'prestasi'])->name('prestasi');
Route::get('/guru', [adminControler::class, 'guru'])->name('guru');
Route::get('/staff', [adminControler::class, 'staff'])->name('staff');
Route::get('/alumni', [adminControler::class, 'alumni'])->name('alumni');
Route::get('/ekstrakurikuler', [adminControler::class, 'ekstrakurikuler'])->name('ekstrakurikuler');
Route::get('/karya', [adminControler::class, 'karya'])->name('karya');
Route::get('/preview', [adminControler::class, 'preview'])->name('preview');


// Layout landing pages
Route::get('/layout1/index', [adminControler::class, 'landing'])->name('layout1.index');
Route::get('/layout2/index', [adminControler::class, 'landing2'])->name('layout2.index');

// Pilih Layout
Route::get('/tamplate', [adminControler::class, 'tamplate'])->name('tamplate');
Route::get('/tamplate/choose', [adminControler::class, 'chooseLayout'])->name('tamplate.choose');
Route::post('/pilih-layout/{layout}', [layoutController::class, 'pilihLayout'])->name('pilih.layout');

Route::get('/hero', [heroController::class, 'index'])->name('hero.index');
Route::post('/hero/update', [heroController::class, 'update'])->name('hero.update');
