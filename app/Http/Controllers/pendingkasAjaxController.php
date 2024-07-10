<?php

namespace App\Http\Controllers;


use App\Models\pendingkas;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Log;

class pendingkasAjaxController extends Controller
{
    public function index()
    {


        $data = pendingkas::query();
        return DataTables::of($data)->addIndexColumn()->addColumn('aksi', function ($data) {
            return view('kas.tombol')->with('data', $data);
        })->make(true);
    }


    public function create()
    {
        //
    }

    // App\Http\Controllers\YourController.php

    public function store(Request $request)
    {
        $data = [
            'nama' => $request->nama,
            'tanggal' => $request->tanggal,
            'jumlah' => $request->jumlah,
            'bukti' => $request->bukti,
        ];

        pendingkas::create($data);

        // Jika perlu, kembalikan respons atau pesan sukses
        return response()->json(['message' => 'Data berhasil disimpan'], 201);
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
        //
    }
}
