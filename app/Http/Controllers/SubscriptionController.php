<?php

namespace App\Http\Controllers;

use App\Models\Method;
use App\Models\Payment;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Auth;

class SubscriptionController extends Controller
{
    public function getSubs(){
        $subs = Subscription::all();

        return view('course.subscription', compact('subs'));
    }

    public function checkoutSubs(Request $request)
    {
        $subs = Subscription::where('id', $request->id)->get();
        $user = Auth::user();

        // Create payment entry
        $payment = Payment::create([
            'subscription_id' => $request->id,
            'user_id' => $user->id,
            'status' => 'unpaid'
        ]);

        $id = $payment->id;
        $price = Subscription::where('id', $request->id)->value('price') * 16000;

        // Midtrans configuration
         \Midtrans\Config::$serverKey = config('midtrans.server_key');
         \Midtrans\Config::$isProduction = false; // Set to true for production environment
         \Midtrans\Config::$isSanitized = true;
         \Midtrans\Config::$is3ds = true;

        // Prepare transaction details
        $params = [
            'transaction_details' => [
                'order_id' => 'ORDER-'.time().'-'.$id,
                'payment_id' => $id,
                'gross_amount' => $price,
            ],
            'customer_details' => [
                'first_name' => $user->name,
                'email' => $user->email,
            ],
        ];

        // Get Snap token
        $snapToken = \Midtrans\Snap::getSnapToken($params);
        return view('checkout.checkout', compact('subs', 'snapToken', 'id'));
    }



    public function checkoutSuccess(Request $request){

        $payment = Payment::find($request->payment_id);

        if ($payment) {
            $payment->status = 'paid';
            $payment->save();

            // Update user membership_type to 'paid'
            $user = User::find($payment->user_id);
            $user->membership_type = 'paid';
            $user->save();
        }
        return response()->json(['message' => 'Payment status updated', 'status' => 'success'], 200);
    }

    public function checkoutSuccessPage(){

        return view('checkout.success');
    }
}