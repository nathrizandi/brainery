<?php

namespace App\Http\Controllers;

use App\Events\ActionLogged;
use Illuminate\Http\Request;
use App\Models\Bootcamp;
use App\Models\Payment;
use App\Models\Speaker;
use App\Models\Publisher;
use App\Models\Subscription;
use App\Models\User;
use App\Models\Admin;
use App\Models\Log;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function loginView(){

        return view('admin.login');
    }

    public function index(){
        $logs = Log::orderBy('created_at', 'desc')->limit(2)->get();

        $formattedLogs = $logs->map(function ($log) {
            return [
                'action' => $log->action,
                'description' => $log->description,
                'month' => $log->created_at->format('M'), // Month abbreviation, e.g., DEC
                'date' => $log->created_at->format('d'), // Day of the month, e.g., 30
                'year' => $log->created_at->format('Y'), // Year, e.g., 2999
                'time' => $log->created_at->format('h:i A'), // Time, e.g., 00:00 AM
            ];
        });

        return view('admin.dashboards.home', compact('formattedLogs'));

    }

    public function profile(){
        return view('admin.profile');
    }

    public function manageUser(){
        return view('admin.dashboards.manageUser');
    }

    public function managePurchaseHistory(){

        $payments = Payment::join("users", "users.id", "=", "payments.user_id")
        ->join("subscriptions", "subscriptions.id", "=", "payments.subscription_id")
        ->select(["payments.id", "users.username", "users.email", "subscriptions.duration", "subscriptions.price", "payments.status", "payments.updated_at as purchase_date"])
        ->paginate(10);

        $count = count($payments);
        return view("admin.dashboards.managePurchaseHistory", compact("payments", "count"));
    }

    public function manageBootcamp(){
        $bootcamps = Bootcamp::join("speakers", "speakers.id", "=", "bootcamps.speaker_id")->join("publishers", "publishers.id", "=", "bootcamps.publisher_id")
        ->select("bootcamps.*", "speakers.nama as speaker_name", "publishers.nama as publisher_name")->paginate(10);

        $count = count($bootcamps);

        // dd($count);
        return view("admin.dashboards.manageBootcamp", compact("bootcamps", "count"));
    }

    public function loginAdmin(Request $request){
        $incomingFields = $request->validate([
            'email_or_username' => ['required'],
            'password' => ['required'],
        ]);


        $fieldType = filter_var($request->email_or_username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        // dd($fieldType, $incomingFields);

        if (Auth::guard('webAdmin')->attempt([$fieldType => $request->email_or_username, 'password' => $request->password])) {
            return redirect()->intended(route('AdminHome')); // Redirect to intended page after login
        }

        throw ValidationException::withMessages([
            'email_or_username' => [trans('auth.failed')],
        ]);

        // return back()
        //     ->withErrors(['email' => 'The provided credentials do not match our records.'])
        //     ->withInput();
    }

    // public function changeUsername(Request $request){
    //     $admin = Auth::user();

    //     $incomingFields = $request->validate([
    //         'username' => ['required'],
    //     ]);

    //     $admin2 = Admin::findOrFail($admin->id);
    //     $admin2->username = $request->username;
    //     $admin2->save();

    //     event(new ActionLogged('Change Username', 'Changes on Admin: ' . $admin2->username));


    //     return redirect()->intended(route('admin.profile'));
    // }

//     public function changePassword(Request $request){
//         $admin = Auth::user();

//         $incomingFields = $request->validate([
//             'password' => ['required'],
//             'confirmPassword' => ['required']
//         ]);

//         if ($request->password == $request->confirmPassword) {
//             $admin2 = Admin::findOrFail($admin->id);
//             $admin2->password = bcrypt($request->password); // Make sure to hash the password
//             $admin2->save();
//             event(new ActionLogged('Change Password', 'Changes on Admin: ' . $admin2->username));
//             return redirect()->intended(route('admin.profile'));
//         }
//     }

//     public function changeEmail(Request $request){
//         $admin = Auth::user();

//         $incomingFields = $request->validate([
//             'email' => ['required'],
//         ]);

//         $admin2 = Admin::findOrFail($admin->id);
//         $admin2->email = $request->email;
//         $admin2->save();
//         event(new ActionLogged('Change Email', 'Changes on Admin: ' . $admin2->username));
//         return redirect()->intended(route('admin.profile'));
//     }

public function changeUsername(Request $request)
{
    $admin = Auth::guard('webAdmin')->user();
    // dd($admin);

    $incomingFields = $request->validate([
        'username' => ['required'],
    ]);

    DB::beginTransaction();

    try {
        $admin2 = Admin::findOrFail($admin->id);
        $admin2->username = $request->username;
        $admin2->save();

        $action = 'Change Username';
        $description = 'Changes on Admin: ' . $admin2->username;
        $now = now();

        $logExists = Log::where('action', $action)
            ->where('description', $description)
            ->where('created_at', $now->toDateTimeString())
            ->where('updated_at', $now->toDateTimeString())
            ->exists();

        if (!$logExists) {
            Log::create([
                'action' => $action,
                'description' => $description,
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }

        DB::commit();

        return redirect()->intended(route('admin.profile'));
    } catch (\Exception $e) {
        DB::rollback();

        return redirect()->back()->withErrors('Error changing username: ' . $e->getMessage());
    }
}

public function changePassword(Request $request)
{
    $admin = Auth::guard('webAdmin')->user();

    $incomingFields = $request->validate([
        'password' => ['required'],
        'confirmPassword' => ['required']
    ]);

    if ($request->password == $request->confirmPassword) {
        DB::beginTransaction();

        try {
            $admin2 = Admin::findOrFail($admin->id);
            $admin2->password = bcrypt($request->password); 
            $admin2->save();

            $action = 'Change Password';
            $description = 'Changes on Admin: ' . $admin2->username;
            $now = now();

            $logExists = Log::where('action', $action)
                ->where('description', $description)
                ->where('created_at', $now->toDateTimeString())
                ->where('updated_at', $now->toDateTimeString())
                ->exists();

            if (!$logExists) {
                Log::create([
                    'action' => $action,
                    'description' => $description,
                    'created_at' => $now,
                    'updated_at' => $now,
                ]);
            }

            DB::commit();

            return redirect()->intended(route('admin.profile'));
        } catch (\Exception $e) {
            DB::rollback();

            return redirect()->back()->withErrors('Error changing password: ' . $e->getMessage());
        }
    } else {
        return redirect()->back()->withErrors('Passwords do not match.');
    }
}

public function changeEmail(Request $request)
{
    $admin = Auth::guard('webAdmin')->user();

    $incomingFields = $request->validate([
        'email' => ['required|email'],
    ]);

    DB::beginTransaction();

    try {
        $admin2 = Admin::findOrFail($admin->id);
        $admin2->email = $request->email;
        $admin2->save();

        $action = 'Change Email';
        $description = 'Changes on Admin: ' . $admin2->username;
        $now = now();

        $logExists = Log::where('action', $action)
            ->where('description', $description)
            ->where('created_at', $now->toDateTimeString())
            ->where('updated_at', $now->toDateTimeString())
            ->exists();

        if (!$logExists) {
            Log::create([
                'action' => $action,
                'description' => $description,
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }

        DB::commit();

        return redirect()->intended(route('admin.profile'));
    } catch (\Exception $e) {
        DB::rollback();

        return redirect()->back()->withErrors('Error changing email: ' . $e->getMessage());
    }
}
}
