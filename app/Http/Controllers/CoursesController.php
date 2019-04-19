<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Course;

class CoursesController extends Controller
{
    public function index() {
        $courses = Course::all();
        return response()->json($courses);
    }

    public function show($id) {
        $course = Course::find($id);

        if(!$course) {
            return response()->json([
                'message' => 'Record not found',
            ], 404);
        }

        return response()->json($course);
    }

    public function store(Request $request) {
        $course = new Course();
        $course->fill($request->all());
        $course->save();

        return response()->json($course, 201);
    }
}
