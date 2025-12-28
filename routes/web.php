<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Tambahkan ini:
Route::get('/tentang', function () {
    return view('tentang');
});
Route::get('/visi-misi', function () {
    return view('visi_misi');
});

Route::get('/sejarah', function () {
    return view('sejarah');
});

Route::get('/struktur', function () {
    return view('struktur');
});

Route::get('/peraturan', function () {
    return view('peraturan');
});

// Rute untuk Unit Pendidikan
Route::get('/unit/tk', function () {
    return view('unit.tk');
});

Route::get('/unit/smp', function () {
    return view('unit.smp');
});

Route::get('/unit/smk', function () {
    return view('unit.smk');
});
// Rute Menu Cepat
Route::get('/kelas', function () {
    return view('kelas');
});

Route::get('/guru', function () {
    return view('guru');
});

Route::get('/unggulan', function () {
    return view('unggulan');
});
Route::get('/fasilitas', function () {
    return view('fasilitas');
});
Route::get('/psb', function () {
    return view('psb');
});
// Rute Detail Fasilitas
Route::get('/fasilitas/madrasah', function () {
    return view('fasilitas.madrasah');
});

Route::get('/fasilitas/asrama-putra', function () {
    return view('fasilitas.asrama_putra');
});

Route::get('/fasilitas/asrama-putri', function () {
    return view('fasilitas.asrama_putri');
});
// Rute Detail Olahraga
Route::get('/fasilitas/voli', function () {
    return view('fasilitas.voli');
});

Route::get('/fasilitas/badminton', function () {
    return view('fasilitas.badminton');
});

Route::get('/fasilitas/mck', function () {
    return view('fasilitas.mck');
});

Route::get('/fasilitas/kantin', function () {
    return view('fasilitas.kantin');
});