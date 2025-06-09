<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Computer;
use Illuminate\Http\Request;

class ComputerController extends Controller
{
    public function index()
    {
        $computers = Computer::all();
        return response()->json($computers, 200);
    }

    public function create()
    {
        return response()->json(['message' => 'Create form for computers'], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'brand' => 'required|max:255',
            'number' => 'required|max:255',
            'training_center_id' => 'required|exists:training_centers,id',
        ]);

        $computer = Computer::create($request->all());
        return response()->json($computer, 201);
    }

    public function show($id)
    {
        $computer = Computer::findOrFail($id);
        return response()->json($computer, 200);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'brand' => 'required|max:255',
            'number' => 'required|max:255',
            'training_center_id' => 'required|exists:training_centers,id',
        ]);

        $computer = Computer::findOrFail($id);
        $computer->update($request->all());
        return response()->json($computer, 200);
    }

    public function destroy($id)
    {
        $computer = Computer::findOrFail($id);
        $computer->delete();
        return response()->json(['message' => 'Computer deleted successfully'], 200);
    }
}