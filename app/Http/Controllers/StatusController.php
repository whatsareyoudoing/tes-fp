<?php

namespace App\Http\Controllers;

use App\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index()
    {
        $items = Status::all();
        return response()->json($items);
    }

    public function store(Request $request)
    {
        $item = Status::create($request->all());
        return response()->json($item);
    }

    public function show($id)
    {
        $item = Status::find($id);
        return response()->json($item);
    }

    public function update(Request $request, $id)
    {
        $item = Status::find($id);
        $item->update($request->all());
        return response()->json($item);
    }

    public function destroy($id)
    {
        Status::destroy($id);
        return response()->json(['message' => 'Status deleted successfully']);
    }
}

