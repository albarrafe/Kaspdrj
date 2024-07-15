<?php

namespace App\Http\Controllers;


use App\Models\pendingkas;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;


class pendingkasAjaxController extends Controller
{
    public function index()
    {
        $data = pendingkas::query();
        return DataTables::of($data)->addIndexColumn()->addColumn('aksi', function ($data) {
            return view('kas.tombol2')->with('data', $data);
        })->make(true);
    }


    public function create()
    {
        //
    }



    public function store(Request $request)
    {
        $data = [
            'nama' => $request->nama,
            'tanggal' => $request->tanggal,
            'jumlah' => $request->jumlah,
            'bukti' => $request->bukti,
        ];

        pendingkas::create($data);
    }


    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        pendingkas::where('id', $id)->delete();
    }
}
