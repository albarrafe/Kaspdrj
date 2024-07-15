<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\pendingkas;
use App\Models\kaslistrik;
use App\Models\Kasagustus;
use App\Models\pengeluaran;
use App\Models\anggota;

class welcomeController extends Controller
{
    public function index()
    {
        // Mengambil nilai total dari masing-masing model
        $totalKasAgustus = Kasagustus::sum('jumlah');

        $totalKasListrik = kaslistrik::sum('jumlah');

        $totalPendingKas = pendingkas::sum('jumlah');

        // Menambahkan semua total untuk mendapatkan totalBayarKas
        $totalBayarKas = $totalKasAgustus + $totalKasListrik + $totalPendingKas;


        $totalPengeluaran = pengeluaran::sum('jumlah');

        $totalKas = $totalBayarKas - $totalPengeluaran;

        $totalAnggota = Anggota::count();

        return view('welcome', [
            'title' => 'Dashboard',
            'totalBayarKas' => $totalBayarKas,
            'totalPengeluaran' => $totalPengeluaran,
            'totalKas' => $totalKas,
            'totalAnggota' => $totalAnggota,
            // tambahkan data lain yang diperlukan untuk ditampilkan di view
        ]);
    }
}
