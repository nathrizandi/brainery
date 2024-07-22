<?php

namespace App\Http\Controllers;

use App\Models\OwnBootcamp;
use App\Models\OwnCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class OwnCourseController extends Controller
{
    public function myLearning(){
        $user = Auth::user();
        $myLearningCourse = OwnCourse::join('users', 'own_courses.user_id', '=', 'users.id')
        ->join('courses', 'own_courses.course_id', '=', 'courses.id')
        ->join('speakers', 'speakers.id', '=', 'courses.speaker_id')
        ->select('courses.title', 'speakers.nama', 'courses.image', 'courses.description')
        ->where('user_id', '=', $user->id)
        ->get();

        $myLearningBootcamp = OwnBootcamp::join('users', 'own_bootcamps.user_id', '=', 'users.id')
        ->join('bootcamps', 'own_bootcamps.bootcamp_id', '=', 'bootcamps.id')
        ->join('speakers', 'speakers.id', '=', 'bootcamps.speaker_id')
        ->select('bootcamps.title', 'bootcamps.date')
        ->where('user_id', '=', $user->id)
        ->get();

        foreach ($myLearningBootcamp as $bootcamp) {
            $date = Carbon::createFromFormat('Y-m-d', $bootcamp->date);
            $bootcamp->formattedDate = $date->format('F, jS Y');
        }

        // dd($myLearningBootcamp);
        return view('mylearning', compact('myLearningCourse', 'myLearningBootcamp'));
    }
}
