<?php

namespace App\Http\Controllers;

use App\Produk;
use App\Status;
use App\Kategori;
use Illuminate\Http\Request;
use DB;

class ProdukController extends Controller
{
    public function index(Request $request)
    {
        $where = $request->status;
        $produk = Produk::with(['kategories', 'statuses'])
            ->whereHas('statuses', function ($query) use ($where) {
                $query->where('nama_status', $where);
            })
            ->get();

        $status = Status::get();
        $kategori = Kategori::get();


        return response()->json(['produk' => $produk, 'status' => $status, 'kategori' => $kategori]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_produk' => ['required'],
            'harga' => ['required','numeric'],
        ]);
        $item = Produk::create($request->all());
        return response()->json($item);
    }

    public function show($id)
    {
        $item = Produk::find($id);
        return response()->json($item);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama_produk' => ['required'],
            'harga' => ['required','numeric'],
        ]);
        $item = Produk::find($id);
        $item->update($request->all());
        return response()->json($item);
    }

    public function destroy($id)
    {
        Produk::destroy($id);
        return response()->json(['message' => 'Produk deleted successfully']);
    }
}

