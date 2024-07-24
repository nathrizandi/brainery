<?php

namespace App\Http\Controllers;

use App\Models\OwnBootcamp;
use App\Models\OwnCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\isNull;

class OwnCourseController extends Controller
{
    public function myLearning()
    {
        $user = Auth::user();



        if (!$user) {
            return redirect()->intended(route('loginView'));
        }

        $myLearningCourse = OwnCourse::join('users', 'own_courses.user_id', '=', 'users.id')
            ->join('courses', 'own_courses.course_id', '=', 'courses.id')
            ->join('speakers', 'speakers.id', '=', 'courses.speaker_id')
            ->select('own_courses.course_id', 'courses.title', 'speakers.nama', 'courses.image', 'courses.description')
            ->where('own_courses.user_id', '=', $user->id)
            ->get();

        $myLearningBootcamp = OwnBootcamp::join('users', 'own_bootcamps.user_id', '=', 'users.id')
            ->join('bootcamps', 'own_bootcamps.bootcamp_id', '=', 'bootcamps.id')
            ->join('publishers', 'publishers.id', '=', 'bootcamps.publisher_id')
            ->select('bootcamps.id', 'bootcamps.title', 'bootcamps.date', 'bootcamps.image', 'publishers.image as pubImage')
            ->where('own_bootcamps.user_id', '=', $user->id)
            ->get();

        foreach ($myLearningBootcamp as $bootcamp) {
            $date = Carbon::createFromFormat('Y-m-d', $bootcamp->date);
            $bootcamp->formattedDate = $date->format('F, jS Y');
        }

        // dd($myLearningBootcamp);
        return view('mylearning', compact('myLearningCourse', 'myLearningBootcamp'));
    }
}
