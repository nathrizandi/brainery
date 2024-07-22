<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Speaker;

class CourseController extends Controller
{
    public function courseMenu() {
        $courseMenu = Course::join("speakers", "courses.speaker_id", "=", "speakers.id")
        ->select(["courses.id", "courses.image as courseImage", "courses.title", "speakers.nama", "courses.description"])
        ->get();

        return view("course.menu", compact("courseMenu"));
    }

    public function courseView($id) {
        $courseView = Course::join("speakers", "courses.speaker_id", "=", "speakers.id")
        ->select(["courses.id", "courses.image as courseImage", "courses.title", "speakers.nama", "speakers.image as spkImage", "courses.description"])
        ->where("courses.id", $id)
        ->get();

        return view("course.view", compact("courseView"));
    }

    public function search(Request $request){

        // dd($request);

        // $query = $request->search;
        // if (empty($query)) {
        //     return redirect('/')->with('error', 'Search query cannot be empty');
        // }

        $query = $request->input('search');
        $items = Course::join('speakers', 'speakers.id', '=', 'courses.speaker_id')
            ->where('courses.title', 'LIKE', "%{$query}%")
            ->orWhere('courses.description', 'LIKE', "%{$query}%")
            ->orWhere('speakers.nama', 'LIKE', "%{$query}%")
            ->select('courses.title as title', 'courses.description as description', 'speakers.nama as speaker')
            ->get();

        return view('search-result', compact('items', 'query'));
        // return view('search-result', );
    }
}