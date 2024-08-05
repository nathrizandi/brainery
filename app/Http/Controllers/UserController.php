<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Course;
use App\Models\Speaker;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/home');
    }

    public function deleted(Request $request)
    {
        $user = Auth::user();

        if($user){
            Auth::logout();
            $user = User::find($user->id);
            if($user){
                $user->delete();
                $request->session()->invalidate();
                $request->session()->regenerateToken();
                return redirect('/home');
            }
        }
        return redirect('/home');

    }

    public function loginView(){
        $visibility = 'hidden';
        $error = 'error';
        return view('login', compact('visibility', 'error'));
    }

    public function registerView(){
        return view('register');
    }

    public function login( Request $request){
        $incomingFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ], [
            'email.required' => 'Email is required.',
            'email.email' => 'Please enter a valid email address.',
            'password.required' => 'Password is required.'
        ]);

        if(Auth::attempt($incomingFields)){
            $request->session()->regenerate();
            return redirect()->intended(route('home'));
        };

        return redirect()->back()
            ->with('error', 'Invalid email or password.')
            ->with('visibility', 'visible');
    }

    public function register(Request $request){
        $incomingFields = $request->validate([
            'email' => ['required'],
            'username' =>['required'],
            'password' => ['required']
        ]);

        User::create([
            'email' => $request->email,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'membership_type' => 'free'
        ]);

        return redirect()->intended(route('loginView'));
    }

    public function edit(){
        $user = Auth::user();

        return view('profile.edit', compact('user'));
    }

    public function manage(){
        $user = Auth::user();

        if($user->membership_type == 'paid'){
            $subscription = User::join('payments', 'payments.user_id', '=', 'users.id')
            ->join('subscriptions', 'subscriptions.id', '=', 'payments.subscription_id')
            ->select('subscriptions.price as price', 'payments.created_at as start', 'subscriptions.duration as duration', 'users.membership_type')
            ->orderBy('payments.created_at', 'desc')
            ->first();

            $startDate = Carbon::parse($subscription->created_at);

            $endDate = $startDate->addMonths($subscription->duration);

            $subscription->end_date = $endDate->format('d/m/Y');
            return view('profile.manage', compact('user', 'subscription'));
        }



        else{
            return view('profile.manage', compact('user'));

        }


    }

    public function certificate(){
        $user = Auth::user();

        return view('profile.certificate', compact('user'));
    }

    public function changeUsername(Request $request){
        $user = Auth::user();

        $incomingFields = $request->validate([
            'username' =>['required'],
        ]);

        // dd($request);

        $user2 = User::findOrFail($user->id);
        $user2->username = $request->username;
        $user2->save();
        return redirect()->intended(route('profile.edit'));


    }

    public function changePassword(Request $request){
        $user = Auth::user();

        $incomingFields = $request->validate([
            'password' =>['required'],
            'confirmPassword' => ['required']
        ]);

        if($request->password == $request->confirmPassword){
            $user2 = User::findOrFail($user->id);
            $user2->password = $request->password;
            $user2->save();
            return redirect()->intended(route('profile.edit'));
        }


    }

    public function changeEmail(Request $request){
        $user = Auth::user();

        $incomingFields = $request->validate([
            'email' =>['required'],
        ]);

        $user2 = User::findOrFail($user->id);
        $user2->email = $request->email;
        $user2->save();
        return redirect()->intended(route('profile.edit'));

    }

    public function home(){
    $user = Auth::user();

    $highestRatedCourse = Course::join("speakers", "courses.speaker_id", "=", "speakers.id")
        ->select(["courses.id", "courses.image as courseImage", "courses.title", "speakers.nama", "courses.description"])
        ->orderBy('courses.rating', 'desc')
        ->first();

    $newestCourses = Course::join("speakers", "courses.speaker_id", "=", "speakers.id")
        ->select(["courses.id", "courses.image as courseImage", "courses.title", "speakers.nama", "courses.description"])
        ->orderBy('courses.created_at', 'desc')
        ->take(4)
        ->get();

    return view('home', compact('user', 'highestRatedCourse', 'newestCourses'));
    }
}