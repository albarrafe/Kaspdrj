<?php

namespace App\Http\Controllers;

use App\Models\bayarkas;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class bayarkasAjaxController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = bayarkas::query();
        return DataTables::of($data)->addIndexColumn()->addColumn('aksi', function ($data) {
            return view('kas.tombol')->with('data', $data);
        })->make(true);
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
        $data = [
            'nama' => $request->nama,
            'tanggal' => $request->tanggal,
            'jumlah' => $request->jumlah,
            'bukti' => $request->bukti,
        ];
        bayarkas::create($data);
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
        bayarkas::where('id', $id)->delete();
    }
}
