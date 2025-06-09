<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\TrainingCenter;
use Illuminate\Http\Request;

class TrainingCenterController extends Controller
{
    public function index()
    {
        $centers = TrainingCenter::all();
        return response()->json($centers, 200);
    }

    public function create()
    {
        return response()->json(['message' => 'Create form for training centers'], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);

        $center = TrainingCenter::create($request->all());
        return response()->json($center, 201);
    }

    public function show($id)
    {
        $center = TrainingCenter::findOrFail($id);
        return response()->json($center, 200);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);

        $center = TrainingCenter::findOrFail($id);
        $center->update($request->all());
        return response()->json($center, 200);
    }

    public function destroy($id)
    {
        $center = TrainingCenter::findOrFail($id);
        $center->delete();
        return response()->json(['message' => 'Training Center deleted successfully'], 200);
    }
}