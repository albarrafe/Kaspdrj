<?php

use App\Http\Controllers\pengeluaranAjaxController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ['title' => 'Home']);
});

Route::get('/bayarkas', function () {
    return view('bayarkas', ['title' => 'Bayar Kas']);
});

Route::get('/pencatatan', function () {
    return view('pencatatan', ['title' => 'Pencatatan Kas']);
});

Route::get('/anggota', function () {
    return view('anggota', ['title' => 'Anggota']);
});

Route::get('/pengeluaran', function () {
    return view('pengeluaran', ['title' => 'Pengeluaran Kas']);
});


Route::post('/pengeluaran', [pengeluaranAjaxController::class, 'store'])->name('pengeluaran.store');

Route::resource('pengeluaranAjax', pengeluaranAjaxController::class);

Route::get('/report', function () {
    return view('report', ['title' => 'Report Kas']);
});

Route::get('/tambah', function () {
    return view('tambah');
});

Route::get('/kasListrik', function () {
    return view('kasListrik', ['title' => 'Pencatatan Kas']);
});

Route::get('/kasAgustus', function () {
    return view('kasAgustus', ['title' => 'Pencatatan Kas']);
});
