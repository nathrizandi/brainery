<?php

namespace App\Http\Controllers;

use App\Events\ActionLogged;
use App\Models\Log;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::paginate(10);
        $usersAll = User::all();
        $count = count($usersAll);

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
    // public function store(Request $request)
    // {
    //     $rules = [
    //         "username" => "required",
    //         "email" => "required",
    //         "password" => "required",
    //         "membership_type" => "required",
    //     ];

    //     $message = [
    //         'required' => ':attribute has to be filled',
    //         'min' => ':attribute must have at least :min character',
    //         'max' => ':attribute maximum character is :max',
    //     ];

    //     $validator = Validator::make($request->all(), $rules, $message);

    //     if ($validator->fails()) {
    //         // Log::info('Validation failed');
    //         return redirect()->back()
    //             ->withInput()
    //             ->withErrors($validator)
    //             ->with('danger', 'Make sure all fields are filled!');
    //     } else {
    //         // Log::info('Validation passed, creating course');
    //         $createUser = User::create([
    //             'username' => $request->username,
    //             'email' => $request->email,
    //             'password' => $request->password,
    //             'membership_type' => $request->membership_type,
    //         ]);

    //         // dd($createUser);
    //         event(new ActionLogged('New User', 'New User with User_id: ' . $createUser->id));
    //         return redirect()->intended(route('User'));
    //     };
    // }

    public function store(Request $request)
    {
        $rules = [
            "username" => "required",
            "email" => "required",
            "password" => "required",
            "membership_type" => "required",
        ];

        $message = [
            'required' => ':attribute has to be filled',
            'min' => ':attribute must have at least :min characters',
            'max' => ':attribute maximum character is :max',
        ];

        $validator = Validator::make($request->all(), $rules, $message);

        if ($validator->fails()) {
            return redirect()->back()
                ->withInput()
                ->withErrors($validator)
                ->with('danger', 'Make sure all fields are filled!');
        }

        // Use a database transaction to ensure atomicity
        DB::beginTransaction();

        try {
            $createUser = User::create([
                'username' => $request->username,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'membership_type' => $request->membership_type,
            ]);

            $action = 'New User';
            $description = 'New User with User_id: ' . $createUser->id;
            $now = now();

            // Check if the log entry already exists
            $logExists = Log::where('action', $action)
                            ->where('description', $description)
                            ->where('created_at', $now->toDateTimeString())
                            ->where('updated_at', $now->toDateTimeString())
                            ->exists();

            if (!$logExists) {
                // Log the action
                Log::create([
                    'action' => $action,
                    'description' => $description,
                    'created_at' => $now,
                    'updated_at' => $now,
                ]);
            }

            // Commit the transaction
            DB::commit();

            return redirect()->intended(route('User'));
        } catch (\Exception $e) {
            // Rollback the transaction in case of error
            DB::rollback();

            return redirect()->back()->withErrors('Error creating user: ' . $e->getMessage());
        }
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
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return response()->json($user);
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, $id)
    // {
    //     $rules = [
    //         "username" => "required",
    //         "email" => "required",
    //         "membership_type" => "required",
    //     ];

    //     $message = [
    //         'required' => ':attribute has to be filled',
    //         'min' => ':attribute must have at least :min character',
    //         'max' => ':attribute maximum character is :max',
    //     ];

    //     $validator = Validator::make($request->all(), $rules, $message);

    //     if ($validator->fails()) {
    //         return redirect()->back()
    //             ->withInput()
    //             ->withErrors($validator)
    //             ->with('danger', 'Make sure all fields are filled!');
    //     } else {
    //         $user = User::findOrFail($id);
    //         $user->username = $request->username;
    //         $user->email = $request->email;
    //         $user->membership_type = $request->membership_type;
    //         $user->save();

    //         event(new ActionLogged('Update User', 'Changes on User_id: ' . $id));
    //         return redirect()->route('User')->with('success', 'User has been updated!');
    //     }
    // }

    public function update(Request $request, $id)
    {
        $rules = [
            "username" => "required",
            "email" => "required|email",
            "membership_type" => "required",
        ];

        $message = [
            'required' => ':attribute has to be filled',
            'min' => ':attribute must have at least :min characters',
            'max' => ':attribute maximum character is :max',
        ];

        $validator = Validator::make($request->all(), $rules, $message);

        if ($validator->fails()) {
            return redirect()->back()
                ->withInput()
                ->withErrors($validator)
                ->with('danger', 'Make sure all fields are filled!');
        }

        // Use a database transaction to ensure atomicity
        DB::beginTransaction();

        try {
            $user = User::findOrFail($id);
            $user->username = $request->username;
            $user->email = $request->email;
            $user->membership_type = $request->membership_type;
            $user->save();

            $action = 'Update User';
            $description = 'Changes on User_id: ' . $id;
            $now = now();

            // Check if the log entry already exists
            $logExists = Log::where('action', $action)
                            ->where('description', $description)
                            ->where('created_at', $now->toDateTimeString())
                            ->where('updated_at', $now->toDateTimeString())
                            ->exists();

            if (!$logExists) {
                // Log the action
                Log::create([
                    'action' => $action,
                    'description' => $description,
                    'created_at' => $now,
                    'updated_at' => $now,
                ]);
            }

            // Commit the transaction
            DB::commit();

            return redirect()->route('User')->with('success', 'User has been updated!');
        } catch (\Exception $e) {
            // Rollback the transaction in case of error
            DB::rollback();

            return redirect()->back()->withErrors('Error updating user: ' . $e->getMessage());
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    // public function destroy($id)
    // {
    //     $user = User::findOrFail($id);
    //     $user->delete();

    //     event(new ActionLogged('Delete User', 'Changes on User_id: ' . $id));
    //     return redirect()->route('User')->with('success', 'User Has Been Deleted');
    // }
    public function destroy($id)
    {
        // Use a database transaction to ensure atomicity
        DB::beginTransaction();

        try {
            $user = User::findOrFail($id);
            $user->delete();

            $action = 'Delete User';
            $description = 'Changes on User_id: ' . $id;
            $now = now();

            // Check if the log entry already exists
            $logExists = Log::where('action', $action)
                            ->where('description', $description)
                            ->where('created_at', $now->toDateTimeString())
                            ->where('updated_at', $now->toDateTimeString())
                            ->exists();

            if (!$logExists) {
                // Log the action
                Log::create([
                    'action' => $action,
                    'description' => $description,
                    'created_at' => $now,
                    'updated_at' => $now,
                ]);
            }

            // Commit the transaction
            DB::commit();

            return redirect()->route('User')->with('success', 'User Has Been Deleted');
        } catch (\Exception $e) {
            // Rollback the transaction in case of error
            DB::rollback();

            return redirect()->back()->withErrors('Error deleting user: ' . $e->getMessage());
        }
    }
}