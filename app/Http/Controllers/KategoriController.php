<?php

namespace App\Http\Controllers;

use App\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $items = Kategori::all();
        return response()->json($items);
    }

    public function store(Request $request)
    {
        $item = Kategori::create($request->all());
        return response()->json($item);
    }

    public function show($id)
    {
        $item = Kategori::find($id);
        return response()->json($item);
    }

    public function update(Request $request, $id)
    {
        $item = Kategori::find($id);
        $item->update($request->all());
        return response()->json($item);
    }

    public function destroy($id)
    {
        Kategori::destroy($id);
        return response()->json(['message' => 'Kategori deleted successfully']);
    }
}

