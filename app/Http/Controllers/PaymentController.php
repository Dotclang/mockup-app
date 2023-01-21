<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\User;
use App\Notifications\PaymentReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Validator;

class PaymentController extends Controller
{
    public function index()
    {
        $payments = Payment::paginate();

        return view('payment', compact('payments'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $payment = Payment::create([
            'name' => $request->name,
            'created_by' => auth()->user()->id,
        ]);

        $admins = User::Where('is_admin', true)->get();

        Notification::send($admins, new PaymentReceived($payment, auth()->user()));
        event(new \App\Events\GlobalEvent($payment->name));

        $success = false;
        if ($payment) {
            $success = true;
        }

        redirect()->route('payments.create')->with(compact('payment', 'success'));
    }
}
