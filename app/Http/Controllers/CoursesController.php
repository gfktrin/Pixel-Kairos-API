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
}
