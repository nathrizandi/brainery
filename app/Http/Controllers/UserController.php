<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
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

        return redirect()->intended(route('home'));
    }

    public function edit(){
        $user = Auth::user();

        return view('profile.edit', compact('user'));
    }

    public function manage(){
        $user = Auth::user();

        return view('profile.manage', compact('user'));
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
}