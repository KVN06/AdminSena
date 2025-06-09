<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::with(['area', 'teachers'])->get();
        return response()->json($courses);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'course_number' => 'required|string|max:255|unique:courses,course_number',
            'day' => 'required|string|max:255',
            'area_id' => 'required|exists:areas,id',
            'teacher_ids' => 'required|array',
            'teacher_ids.*' => 'exists:teachers,id'
        ]);

        $course = Course::create($request->except('teacher_ids'));
        $course->teachers()->attach($request->teacher_ids);

        return response()->json($course->load(['area', 'teachers']), 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        return response()->json($course->load(['area', 'teachers', 'apprentices']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }
}
