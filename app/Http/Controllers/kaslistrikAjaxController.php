<?php

namespace App\Http\Controllers;

use App\Models\kaslistrik;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class kaslistrikAjaxController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = kaslistrik::query();
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
        kaslistrik::create($data);
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
        $data = kaslistrik::where('id', $id)->first();
        return response()->json(['result' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = [
            'nama' => $request->nama,
            'tanggal' => $request->tanggal,
            'jumlah' => $request->jumlah,
            'bukti' => $request->bukti,
        ];
        kaslistrik::where('id', $id)->update($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        kaslistrik::where('id', $id)->delete();
    }
}
