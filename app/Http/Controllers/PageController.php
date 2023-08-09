<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return view('pages.index');
    }
    public function checkout(Request $request) {
        $data = $request->validate([
            'plan_name' => 'required|string'
        ]);
        $amount = '';
        $plan_name = $data['plan_name'];

        if ($data['plan_name'] && $data['plan_name'] == 'routine') {
            $amount = 10000;
        }
        elseif ($data['plan_name'] && $data['plan_name'] == 'premium') {
            $amount = 15000;
        }
        elseif ($data['plan_name'] && $data['plan_name'] == 'executive') {
            $amount = 20000;
        }


        return view('pages.checkout', compact('amount', 'plan_name'));
    }
    public function pay(Request $request) {
        $data = $request->validate([
            'plan_name' => 'required|string',
            'amount' => 'required|numeric',
            'payment_type' => 'nullable|string',
        ]);
        $amount = '';

        if ($data['plan_name'] && $data['plan_name'] == 'routine') {
            $amount = 10000;
        }
        elseif ($data['plan_name'] && $data['plan_name'] == 'premium') {
            $amount = 15000;
        }
        elseif ($data['plan_name'] && $data['plan_name'] == 'executive') {
            $amount = 20000;
        }

        if (array_key_exists('payment_type', $data) && $data['payment_type'] == 'Pay Later') {
            // Submit the form to admit
            dd('Payment Later');
        } else {
            // Initialize payment
            dd('Payment Now');
        }

        return view('pages.checkout', compact('amount'));
    }
    public function success() {
        return view('pages.success');
    }
    public function callback(Request $request) {
        return view('pages.success');
    }
}
