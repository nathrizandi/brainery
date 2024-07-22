<?php

namespace App\Http\Controllers;

use App\Models\Method;
use App\Models\Payment;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubscriptionController extends Controller
{
    public function getSubs(){
        $subs = Subscription::all();

        return view('course.subscription', compact('subs'));
    }

    public function checkoutSubs(Request $request){
        $subs = Subscription::select('*')
        ->where('id', '=', $request->id)
        ->get();

        $method = Method::all();


        return view('checkout.checkout', compact('subs', 'method'));
    }

    public function checkoutSuccess(Request $request){
        $user = Auth::user();


        Payment::create([
            'subscription_id' => $request->id,
            'method_id' => $request->method,
            'user_id' => $user->id
        ]);

        $user2 = User::findOrFail($user->id);
        $user2->membership_type = 'paid';
        $user2->save();

        return view('checkout.success');

    }
}