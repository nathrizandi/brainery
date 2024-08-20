<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Category;
use App\Models\Speaker;
use App\Models\OwnCourse;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    public function courseMenu()
    {
        $courseMenu = Category::join("courses", "courses.category_id", "=", "categories.id")
            ->join("speakers", "courses.speaker_id", "=", "speakers.id")
            ->select(["categories.id as catId", "categories.category as catName", "courses.id", "courses.image as courseImage", "courses.title", "speakers.nama", "courses.description"])
            ->get();

        return view("course.menu", compact("courseMenu"));
    }


    public function courseList()
    {
        $courseList = Course::join("speakers", "courses.speaker_id", "=", "speakers.id")
            ->select(["courses.id", "courses.image as courseImage", "courses.title", "speakers.nama", "courses.description"])
            ->get();

        return view("course.list", compact("courseList"));
    }

    public function courseView($id)
    {
        $courseView = Category::join("courses", "courses.category_id", "=", "categories.id")
            ->join("speakers", "courses.speaker_id", "=", "speakers.id")
            ->select(["categories.id as catId", "categories.category as catName", "courses.id", "courses.image as courseImage", "courses.title", "speakers.nama", "courses.description", "courses.rating"])        
            ->where("courses.id", $id)
            ->get();

        return view("course.view", compact("courseView"));
    }

    public function search(Request $request)
    {

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
            ->select('courses.id as id', 'courses.title as title', 'courses.description as description', 'speakers.nama as speaker', 'courses.image as images')
            ->get();

        return view('search-result', compact('items', 'query'));
        // return view('search-result', );
    }

    public function joinCourse($id)
    {
        if (Auth::check()) {
            $user = Auth::user();

            $existingEntry = OwnCourse::where('user_id', $user->id)->where('course_id', $id)->first();

            if (!$existingEntry) {
                $ownCourse = new OwnCourse();
                $ownCourse->user_id = $user->id;
                $ownCourse->course_id = $id;
                $ownCourse->save();
            }

            return redirect()->route('courseMaterial', $id);
        } else {
            return redirect()->route('loginView')->with('error', 'You need to be logged in to join the course.');
        }
    }

}
