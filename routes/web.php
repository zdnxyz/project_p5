<?php
use App\Models\Industri;
use App\Models\Artikel;
use App\Models\Eskul;
use App\Models\Jurusan;
use App\Models\Fasilitas;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $artikel = Artikel::all();
    return view('welcome', compact('artikel'));
});

Route::get('/tampil_artikel', function () {
    $artikel = Artikel::all();
    return view('artikel', compact('artikel'));
});

Route::get('/tampil_eskul', function () {
    $eskul = Eskul::all();
    return view('eskul', compact('eskul'));
});

Route::get('/tampil_fasilitas', function () {
    $fasilitas = Fasilitas::all();
    return view('fasilitas', compact('fasilitas'));
});

// Route::get('/tampil_jurusan', function () {
//     $jurusan = Jurusan::all();
//     return view('jurusan', compact('jurusan'));
// });

// Route::get('/tampil_industri', function () {
//     $industri = Industri::all();
//     return view('industri', compact('industri'));
// });


Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// tambah dibawah ini
Route::resource('artikel', App\Http\Controllers\ArtikelController::class)->middleware('auth');
Route::resource('eskul', App\Http\Controllers\EskulController::class)->middleware('auth');
Route::resource('fasilitas', App\Http\Controllers\FasilitasController::class)->middleware('auth');
Route::resource('industri', App\Http\Controllers\IndustriController::class)->middleware('auth');
Route::resource('jurusan', App\Http\Controllers\JurusanController::class)->middleware('auth');
