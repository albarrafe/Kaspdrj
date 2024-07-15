<?php


use App\Http\Controllers\pengeluaranAjaxController;
use App\Http\Controllers\anggotaAjaxController;
use App\Http\Controllers\bayarkasAjaxController;
use App\Http\Controllers\kaslistrikAjaxController;
use App\Http\Controllers\KasController;
use App\Http\Controllers\kasagustusAjaxController;
use App\Http\Controllers\pendingkasAjaxController;
use App\Http\Controllers\ReportAjaxController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\welcomeController;

Route::get('/', [WelcomeController::class, 'index'])->name('dashboard');

// Route untuk halaman welcome dengan view biasa



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

// definisi manual edit
// Route::get('pengeluaranAjax/{id}/edit', [pengeluaranAjaxController::class, 'edit']);

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




Route::get('/pendingkas', function () {
    return view('kas.pendingkas');
});
Route::post('pendingkas', [pendingkasAjaxController::class, 'store'])->name('pendingkas.store');
Route::resource('pendingkasAjax', pendingkasAjaxController::class);


Route::get('/pencatatankas', function () {
    return view('kas.pencatatankas');
});

Route::get('/anggota/data', [AnggotaAjaxController::class, 'getData'])->name('anggota.data');


Route::resource('reportAjax', reportAjaxController::class);

Route::get('/login', function () {
    return view('login.login');
});
