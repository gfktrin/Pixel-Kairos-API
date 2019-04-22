<?php

namespace App\Http\Controllers;

use App\Http\Resources\CourseResource;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Course;

class CoursesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function index() {
        return CourseResource::collection(Course::all());
    }

    public function show($id) {
        $course = Course::find($id);

        if(!$course) {
            return response()->json([
                'message' => 'Record not found',
            ], 404);
        }

        return new CourseResource($course);
    }

    public function store(Request $request) {
        $course = new Course();
        $course->fill($request->all());
        $course->save();

        return response()->json($course, 201);
    }

    public function update(Request $request, $id) {
        $course = Course::find($id);

        if(!$course) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $course->fill($request->all());
        $course->save();

        return response()->json($course);
    }
}
