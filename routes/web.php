<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminControler;
use App\Http\Controllers\beritaController;
use App\Http\Controllers\layoutController;
use App\Http\Controllers\tampilanController;
use App\Http\Controllers\heroController;
use App\Http\Controllers\agendaController;
use App\Http\Controllers\prestasiController;
use App\Http\Controllers\galeriController;
use App\Http\Controllers\guruController;
use App\Http\Controllers\sidebarController;


Route::get('/haloo', function () {
    return 'Welcome Dashboard';
})->middleware('check.subdomain');

// Autentikasi
Route::get('/', [adminControler::class, 'webpromosi'])->name('webpromosi');
Route::get('/login', [adminControler::class, 'formLogin'])->name('login');
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
Route::get('/tampilan', [tampilanController::class, 'index'])->name('tampilan.index');
Route::post('/tampilan/update', [tampilanController::class, 'update'])->name('tampilan.update');

// landing
Route::get('/webpromosi', [adminControler::class, 'webpromosi'])->name('webpromosi');
// Sidebar Menu

Route::get('/agenda', [adminControler::class, 'agenda'])->name('agenda');
// routes/web.php
Route::get('/agenda', [AgendaController::class, 'index'])->name('agenda.index');
Route::post('/agenda', [AgendaController::class, 'store'])->name('agenda.store');
// routes/web.php
Route::get('/agenda/{id}/edit', [AgendaController::class, 'edit'])->name('agenda.edit'); // view
Route::get('/api/agenda/{id}', [AgendaController::class, 'getAgenda']); // JSON

Route::put('/agenda/{id}', [AgendaController::class, 'update']);
Route::delete('/agenda/{id}', [AgendaController::class, 'destroy']);
Route::get('/agenda/{id}', [agendaController::class, 'show'])->name('show');

Route::get('/agenda/search', [AgendaController::class, 'search']);
Route::resource('berita', BeritaController::class);



// Atau definisikan manual satu per satu
Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');
Route::get('/berita/create', [BeritaController::class, 'create'])->name('berita.create');
Route::post('/berita', [BeritaController::class, 'store'])->name('berita.store');
Route::get('/berita/{id}', [BeritaController::class, 'show'])->name('berita.show');
Route::get('/berita/{id}/edit', [BeritaController::class, 'edit'])->name('berita.edit');
Route::put('/berita/{id}', [BeritaController::class, 'update'])->name('berita.update');
Route::delete('/berita/{id}', [BeritaController::class, 'destroy'])->name('berita.destroy');


Route::get('/galeri', [galeriController::class, 'index'])->name('galeri.index');
Route::post('/galeri', [galeriController::class, 'store'])->name('galeri.store');
Route::get('/galeri/{id}', [galeriController::class, 'show'])->name('galeri.show');
Route::get('/galeri/{id}/edit', [galeriController::class, 'edit'])->name('galeri.edit');
Route::put('/galeri/{id}', [galeriController::class, 'update'])->name('galeri.update');
Route::delete('/galeri/{id}', [galeriController::class, 'destroy'])->name('galeri.destroy');

Route::get('/jurusan', [adminControler::class, 'jurusan'])->name('jurusan');


Route::get('/prestasi', [prestasiController::class, 'index'])->name('prestasi.index');

// Ambil detail 1 prestasi (untuk modal detail)
Route::get('/prestasi/{id}', [prestasiController::class, 'show'])->name('prestasi.show');

// Form edit (ambil data untuk modal edit)
Route::get('/prestasi/{id}/edit', [prestasiController::class, 'edit'])->name('prestasi.edit');

// Tambah prestasi
Route::post('/prestasi', [prestasiController::class, 'store'])->name('prestasi.store');

// Update prestasi
Route::put('/prestasi/{id}', [prestasiController::class, 'update'])->name('prestasi.update');

// Hapus prestasi
Route::delete('/prestasi/{id}', [prestasiController::class, 'destroy'])->name('prestasi.destroy');

// Cari prestasi (judul, konten, tanggal, dsb.)
Route::get('/prestasi/search', [prestasiController::class, 'search'])->name('prestasi.search');

Route::get('/guru', [guruController::class, 'index'])->name('guru.index');
Route::post('/guru', [guruController::class, 'store'])->name('guru.store');
Route::get('/guru/{id}', [guruController::class, 'show'])->name('guru.show');
Route::get('/guru/{id}/edit', [guruController::class, 'edit'])->name('guru.edit');
Route::put('/guru/{id}', [guruController::class, 'update'])->name('guru.update');
Route::delete('/guru/{id}', [guruController::class, 'destroy'])->name('guru.destroy');

Route::get('/staff', [adminControler::class, 'staff'])->name('staff');
Route::get('/alumni', [adminControler::class, 'alumni'])->name('alumni');
Route::get('/ekstrakurikuler', [adminControler::class, 'ekstrakurikuler'])->name('ekstrakurikuler');
Route::get('/karya', [adminControler::class, 'karya'])->name('karya');
Route::get('/preview', [adminControler::class, 'preview'])->name('preview');


// Layout landing pages
Route::get('/layout1/index', [adminControler::class, 'landing'])->name('layout1.index');
Route::get('/layout2/index', [adminControler::class, 'landing2'])->name('layout2.index');
Route::get('/layout3/index', [adminControler::class, 'landing3'])->name('layout3.index');
Route::get('/ekstrakurikuler', [adminControler::class, 'ekstrakurikuler'])->name('ekstrakurikuler');
Route::get('/karya', [adminControler::class, 'karya'])->name('karya');

// Layout 1
Route::get('/layout1/navbar/main', [adminControler::class, 'main'])->name('layout1.navbar.main');
Route::get('/layout1/index', [adminControler::class, 'landing'])->name('layout1.index');
Route::get('/layout1/kepsek', [adminControler::class, 'kepsek'])->name('layout1.kepsek');
Route::get('/layout1/admissions', [adminControler::class, 'admissions'])->name('layout1.admissions');
Route::get('/layout1/academics', [adminControler::class, 'academics'])->name('layout1.academics');
Route::get('/layout1/faculty_staff', [adminControler::class, 'faculty_staff'])->name('layout1.faculty_staff');
Route::get('/layout1/campus_facilities', [adminControler::class, 'campus_facilities'])->name('layout1.campus_facilities');
Route::get('/layout1/students_life', [adminControler::class, 'students_life'])->name('layout1.students_life');
Route::get('/layout1/news', [adminControler::class, 'news'])->name('layout1.news');
Route::get('/layout1/events', [adminControler::class, 'events'])->name('layout1.events');
Route::get('/layout1/alumni', [adminControler::class, 'alumni1'])->name('layout1.alumni');
Route::get('/layout1/news_details', [adminControler::class, 'news_details'])->name('layout1.news_details');
Route::get('/layout1/event_details', [adminControler::class, 'event_details'])->name('layout1.event_details');
Route::get('/layout1/privacy', [adminControler::class, 'privacy'])->name('layout1.privacy');
Route::get('/layout1/terms_of_service', [adminControler::class, 'terms_of_service'])->name('layout1.terms_of_service');
Route::get('/layout1/eror', [adminControler::class, 'eror'])->name('layout1.eror');
Route::get('/layout1/starter_page', [adminControler::class, 'starter_page'])->name('layout1.starter_page');
Route::get('/layout1/contact', [adminControler::class, 'contact'])->name('layout1.contact');
Route::get('/layout1/footer/main', [tampilanController::class, 'layout1.footer.main'])->name('layout1.footer.main');



//Layout 2
Route::get('/layout2/index', [adminControler::class, 'landing2'])->name('layout2.index');
Route::get('/layout2/kepsek', [adminControler::class, 'kepsek2'])->name('layout2.kepsek');
Route::get('/layout2/admissions2', [adminControler::class, 'admissions2'])->name('layout2.admissions2');
Route::get('/layout2/academics', [adminControler::class, 'academics2'])->name('layout2.academics');
Route::get('/layout2/faculty_staff', [adminControler::class, 'faculty_staff2'])->name('layout2.faculty_staff');
Route::get('/layout2/campus_facilities', [adminControler::class, 'campus_facilities2'])->name('layout2.campus_facilities');
Route::get('/layout2/students_life', [adminControler::class, 'students_life2'])->name('layout2.students_life');
Route::get('/layout2/news', [adminControler::class, 'news2'])->name('layout2.news');
Route::get('/layout2/events', [adminControler::class, 'events2'])->name('layout2.events');
Route::get('/layout2/alumni', [adminControler::class, 'alumni2'])->name('layout2.alumni');

// Pilih Layout
Route::get('/tamplate', [adminControler::class, 'tamplate'])->name('tamplate');
Route::get('/tamplate/choose', [adminControler::class, 'chooseLayout'])->name('tamplate.choose');
Route::post('/pilih-layout/{layout}', [layoutController::class, 'pilihLayout'])->name('pilih.layout');

Route::get('/hero', [heroController::class, 'index'])->name('hero.index');
Route::post('/hero/update', [heroController::class, 'update'])->name('hero.update');

Route::get('/layout2/{halaman}', [tampilanController::class, 'halamanDinamis'])
     ->name('layout2.halaman');


// Halaman sidebar
Route::get('/menu', [SidebarController::class, 'index']);

// API CRUD untuk Sidebar


Route::get('/sidebar', [SidebarController::class, 'index'])->name('sidebar.index');
Route::post('/sidebar/store', [SidebarController::class, 'store'])->name('sidebar.store');
Route::put('/sidebar/update/{id}', [SidebarController::class, 'update'])->name('sidebar.update');
Route::delete('/sidebar/delete/{id}', [SidebarController::class, 'delete'])->name('sidebar.delete');
Route::put('/sidebar/toggle/{id}', [SidebarController::class, 'toggleStatus'])->name('sidebar.toggle');
Route::get('/sidebar/data', [SidebarController::class, 'getData']);
Route::delete('/sidebar/{id}', [SidebarController::class, 'destroy']);
Route::put('/sidebar/toggle/{id}', [SidebarController::class, 'toggleStatus']);
Route::put('/sidebar/update/{id}', [SidebarController::class, 'update']);
Route::post('/sidebar/store', [SidebarController::class, 'store']);
Route::get('/sidebar/data', function () {
    return \App\Models\Sidebar::orderBy('order')->get();
});

