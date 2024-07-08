<?php


use App\Http\Controllers\pengeluaranAjaxController;
use App\Http\Controllers\anggotaAjaxController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ['title' => 'Home']);
});

Route::get('/bayarkas', function () {
    return view('bayarkas.bayarkas', ['title' => 'Bayar Kas']);
});

Route::get('/pencatatan', function () {
    return view('kas.pencatatan', ['title' => 'Pencatatan Kas']);
});

Route::get('/anggota', function () {
    return view('anggota.anggota', ['title' => 'Anggota']);
});

Route::get('/pengeluaran', function () {
    return view('pengeluaran.pengeluaran', ['title' => 'Pengeluaran Kas']);
});

Route::post('/pengeluaran', [pengeluaranAjaxController::class, 'store'])->name('pengeluaran.store');
Route::resource('pengeluaranAjax', pengeluaranAjaxController::class);

Route::post('anggota', [anggotaAjaxController::class, 'store'])->name('anggota.store');
Route::resource('anggotaAjax', anggotaAjaxController::class);

Route::get('/report', function () {
    return view('report.report', ['title' => 'Report Kas']);
});



Route::get('/kasListrik', function () {
    return view('kas.kasListrik', ['title' => 'Pencatatan Kas']);
});

Route::get('/kasAgustus', function () {
    return view('kas.kasAgustus', ['title' => 'Pencatatan Kas']);
});
