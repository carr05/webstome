<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminControler;
use App\Http\Controllers\layoutController;
use App\Http\Controllers\tampilanController;
<<<<<<< HEAD
use App\Http\Controllers\heroController;

=======
>>>>>>> 435a7c3 (landing web promosi)

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
<<<<<<< HEAD

Route::get('/tampilan', [tampilanController::class, 'index'])->name('tampilan.index');
Route::post('/tampilan/update', [tampilanController::class, 'update'])->name('tampilan.update');

// Halaman utama sekolah
=======
Route::get('/tampilan', [tampilanController::class, 'index'])->name('tampilan.index');
Route::post('/tampilan/update', [tampilanController::class, 'update'])->name('tampilan.update');

// landing
Route::get('/webpromosi', [adminControler::class, 'webpromosi'])->name('webpromosi');
// Sidebar Menu
>>>>>>> 435a7c3 (landing web promosi)
Route::get('/hero', [adminControler::class, 'hero'])->name('hero');
Route::get('/agenda', [adminControler::class, 'agenda'])->name('agenda');
Route::get('/berita', [adminControler::class, 'berita'])->name('berita');
Route::get('/galeri', [adminControler::class, 'galeri'])->name('galeri');
Route::get('/jurusan', [adminControler::class, 'jurusan'])->name('jurusan');
Route::get('/prestasi', [adminControler::class, 'prestasi'])->name('prestasi');
Route::get('/guru', [adminControler::class, 'guru'])->name('guru');
Route::get('/staff', [adminControler::class, 'staff'])->name('staff');
<<<<<<< HEAD
Route::get('/alumni', [adminControler::class, 'alumni'])->name('alumni');
Route::get('/ekstrakurikuler', [adminControler::class, 'ekstrakurikuler'])->name('ekstrakurikuler');
Route::get('/karya', [adminControler::class, 'karya'])->name('karya');

// Layout landing pages
Route::get('/layout1/index', [adminControler::class, 'landing'])->name('layout1.index');
Route::get('/layout2/index', [adminControler::class, 'landing2'])->name('layout2.index');
=======
Route::get('/ekstrakurikuler', [adminControler::class, 'ekstrakurikuler'])->name('ekstrakurikuler');
Route::get('/karya', [adminControler::class, 'karya'])->name('karya');

// Layout 1
Route::get('/layout1/index', [adminControler::class, 'landing'])->name('layout1.index');
Route::get('/layout1/kepsek', [adminControler::class, 'kepsek'])->name('layout1.kepsek');
Route::get('/layout1/admissions', [adminControler::class, 'admissions'])->name('layout1.admissions');
Route::get('/layout1/academics', [adminControler::class, 'academics'])->name('layout1.academics');
Route::get('/layout1/faculty_staff', [adminControler::class, 'faculty_staff'])->name('layout1.faculty_staff');
Route::get('/layout1/campus_facilities', [adminControler::class, 'campus_facilities'])->name('layout1.campus_facilities');
Route::get('/layout1/students_life', [adminControler::class, 'students_life'])->name('layout1.students_life');
Route::get('/layout1/news', [adminControler::class, 'news'])->name('layout1.news');
Route::get('/layout1/events', [adminControler::class, 'events'])->name('layout1.events');
Route::get('/layout1/alumni', [adminControler::class, 'alumni'])->name('layout1.alumni');



//Layout 2
Route::get('/layout2/index', [adminControler::class, 'landing2'])->name('layout2.index');
Route::get('/layout2/kepsek', [adminControler::class, 'kepsek'])->name('layout2.kepsek');
Route::get('/layout2/admissions', [adminControler::class, 'admissions'])->name('layout2.admissions');
Route::get('/layout2/academics', [adminControler::class, 'academics'])->name('layout2.academics');
Route::get('/layout2/faculty_staff', [adminControler::class, 'faculty_staff'])->name('layout2.faculty_staff');
Route::get('/layout2/campus_facilities', [adminControler::class, 'campus_facilities'])->name('layout2.campus_facilities');
Route::get('/layout2/students_life', [adminControler::class, 'students_life'])->name('layout2.students_life');
Route::get('/layout2/news', [adminControler::class, 'news'])->name('layout2.news');
Route::get('/layout2/events', [adminControler::class, 'events'])->name('layout2.events');
Route::get('/layout2/alumni', [adminControler::class, 'alumni'])->name('layout2.alumni');
>>>>>>> 435a7c3 (landing web promosi)

// Pilih Layout
Route::get('/tamplate', [adminControler::class, 'tamplate'])->name('tamplate');
Route::get('/tamplate/choose', [adminControler::class, 'chooseLayout'])->name('tamplate.choose');
Route::post('/pilih-layout/{layout}', [layoutController::class, 'pilihLayout'])->name('pilih.layout');

<<<<<<< HEAD
Route::get('/hero', [heroController::class, 'index'])->name('hero.index');
Route::post('/hero/update', [heroController::class, 'update'])->name('hero.update');
=======

>>>>>>> 435a7c3 (landing web promosi)
