<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function index()
    {
        $areas = Area::all();
        return response()->json($areas, 200);
    }

    public function create()
    {
        return response()->json(['message' => 'Create form for areas'], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);

        $area = Area::create($request->all());
        return response()->json($area, 201);
    }
    
    public function show($id)
    {
        $area = Area::findOrFail($id);
        return response()->json($area, 200);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);

        $area = Area::findOrFail($id);
        $area->update($request->all());
        return response()->json($area, 200);
    }

    public function destroy($id)
    {
        $area = Area::findOrFail($id);
        $area->delete();
        return response()->json(['message' => 'Area deleted successfully'], 200);
    }
}