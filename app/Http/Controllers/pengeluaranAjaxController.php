<?php

namespace App\Http\Controllers;

use App\Models\pengeluaran;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class pengeluaranAjaxController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = pengeluaran::orderBy('nominal', 'asc');
        return DataTables::of($data)->addIndexColumn()->addColumn('aksi', function ($data) {
            return view('tombol.tombol')->with('data', $data);
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
            'nominal' => $request->nominal,
            'keterangan' => $request->keterangan,
            'tanggal' => $request->tanggal,
            'bukti' => $request->bukti,
        ];
        pengeluaran::create($data);
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
        $data = pengeluaran::where('id', $id)->first();
        return response()->json(['result' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = [
            'nominal' => $request->nominal,
            'keterangan' => $request->keterangan,
            'tanggal' => $request->tanggal,
            'bukti' => $request->bukti,
        ];
        pengeluaran::where('id', $id)->update($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        pengeluaran::where('id', $id)->delete();
    }
}
