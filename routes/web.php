<?php


use App\Http\Controllers\pengeluaranAjaxController;
use App\Http\Controllers\anggotaAjaxController;
use App\Http\Controllers\bayarkasAjaxController;
use App\Http\Controllers\kaslistrikAjaxController;

use App\Http\Controllers\kasagustusAjaxController;
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

Route::post('bayarkas', [bayarkasAjaxController::class, 'store'])->name('bayarkas.store');
Route::resource('bayarkasAjax', bayarkasAjaxController::class);

Route::get('/report', function () {
    return view('report.report', ['title' => 'Report Kas']);
});



Route::get('/kaslistrik', function () {
    return view('kas.kaslistrik', ['title' => 'Pencatatan Kas']);
});
Route::post('kaslistrik', [kaslistrikAjaxController::class, 'store'])->name('kaslistrik.store');
Route::resource('kaslistrikAjax', kaslistrikAjaxController::class);

Route::get('/kasagustus', function () {
    return view('kas.kasagustus', ['title' => 'Pencatatan Kas']);
});
Route::post('kasagustus', [kasagustusAjaxController::class, 'store'])->name('kasagustus.store');
Route::resource('kasagustusAjax', kasagustusAjaxController::class);
