<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function loginView(){
        return view('login');
    }

    public function registerView(){
        return view('register');
    }

    public function login( Request $request){
        $incomingFields = $request->validate([
            'email' => ['required'],
            'password'=> ['required']
        ]);

        if(Auth::attempt($incomingFields)){
            $request->session()->regenerate();
            return redirect()->intended(route('home'));
        };
        return redirect()->back();
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
}