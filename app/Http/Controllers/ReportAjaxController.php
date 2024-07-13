<?php

namespace App\Http\Controllers;

use App\Models\kasagustus;
use App\Models\kaslistrik;
use App\Models\pendingkas;
use App\Models\pengeluaran;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class reportAjaxController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $pengeluaran = pengeluaran::all()->map(function ($item) {
        //     $item->jenis = 'Pengeluaran';
        //     return $item;
        // });

        // $pendingkas = pendingkas::all()->map(function ($item) {
        //     $item->jenis = 'Pemasukan';
        //     return $item;
        // });

        // $kaslistrik = kaslistrik::all()->map(function ($item) {
        //     $item->jenis = 'Pemasukan';
        //     return $item;
        // });

        $dataPengeluaran = Pengeluaran::select('nominal as jumlah', 'tanggal', 'keterangan')
            ->get()
            ->map(function ($item) {
                $item->jenis = 'Pengeluaran';
                return $item;
            });

        $dataPemasukanPendingkas = Pendingkas::select('jumlah', 'tanggal')
            ->get()
            ->map(function ($item) {
                $item->keterangan = 'Kas bulanan';
                $item->jenis = 'Pemasukan';
                return $item;
            });

        $dataPemasukanKaslistrik = Kaslistrik::select('jumlah', 'tanggal')
            ->get()
            ->map(function ($item) {
                $item->keterangan = 'Kas listrik';
                $item->jenis = 'Pemasukan';
                return $item;
            });
        $dataPemasukanKasagustus = kasagustus::select('jumlah', 'tanggal')
            ->get()
            ->map(function ($item) {
                $item->keterangan = 'Kas Agustus';
                $item->jenis = 'Pemasukan';
                return $item;
            });

        // Gabungkan data secara manual ke dalam satu collection
        $data = $dataPengeluaran->concat($dataPemasukanPendingkas)->concat($dataPemasukanKaslistrik)->concat($dataPemasukanKasagustus);

        // Urutkan data berdasarkan tanggal atau kolom yang sesuai
        $data = $data->sortBy('tanggal');



        return DataTables::of($data)
            ->addIndexColumn()
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
