<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Speaker;

class CourseController extends Controller
{
    public function courseMenu() {
        $courseMenu = Course::join("speakers", "courses.speaker_id", "=", "speakers.id")
        ->select(["courses.image as courseImage", "courses.title", "speakers.*", "courses.description"])
        ->get();

        return view("course.menu", compact("courseMenu"));
    }
}
