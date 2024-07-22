<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::paginate(10);

        $count = count($users);

        return view("admin.dashboards.manageUser", compact("users", "count"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            "username" => "required",
            // "courseDesc" => "required|string|min:3|max:255",
            "email" => "required",
            "password" => "required",
            "membership_type" => "required",
        ];

        $message = [
            'required' => ':attribute has to be filled',
            'min' => ':attribute must have at least :min character',
            'max' => ':attribute maximum character is :max',
        ];

        $validator = Validator::make($request->all(), $rules, $message);

        if ($validator->fails()) {
            // Log::info('Validation failed');
            return redirect()->back()
                ->withInput()
                ->withErrors($validator)
                ->with('danger', 'Make sure all fields are filled!');
        } else {
            // Log::info('Validation passed, creating course');
            $createUser = User::create([
                'username' => $request->username,
                'email' => $request->email,
                'password' => $request->password,
                'membership_type' => $request->membership_type,
            ]);

            // dd($createUser);

            return redirect()->intended(route('User'));
        };
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
