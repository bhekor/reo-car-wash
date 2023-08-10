<?php

namespace App\Http\Controllers;

use App\Mail\Orders\OrderPlaced;
use Bhekor\LaravelMonnify\Facades\Monnify;
use Bhekor\LaravelMonnify\Classes\MonnifyPaymentMethod;
use Bhekor\LaravelMonnify\Classes\MonnifyPaymentMethods;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
        $plan = '';
        $plan_name = $data['plan_name'];

        if ($data['plan_name'] && $data['plan_name'] == 'routine') {
            $amount = 10000;
            $plan = 'Routine Wash';
        }
        elseif ($data['plan_name'] && $data['plan_name'] == 'premium') {
            $amount = 15000;
            $plan = 'Premium Detailing';
        }
        elseif ($data['plan_name'] && $data['plan_name'] == 'executive') {
            $amount = 20000;
            $plan = 'Executive Detailing';
        }
        session()->put('checkoutPage', url()->full());

        return view('pages.checkout', compact('amount', 'plan', 'plan_name'));
    }
    public function pay(Request $request) {
        $amount = '';
        $plan = '';
        $data = $request->validate([
            'name' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|string',
            'note' => 'nullable|string',
            'location' => 'required|string',
            'plan_name' => 'required|string',
            'amount' => 'required|numeric',
            'payment_type' => 'nullable|string'
        ]);

        if ($data['plan_name'] && $data['plan_name'] == 'routine') {
            $amount = 10000;
            $plan = 'Routine Wash';
        }
        elseif ($data['plan_name'] && $data['plan_name'] == 'premium') {
            $amount = 15000;
            $plan = 'Premium Detailing';
        }
        elseif ($data['plan_name'] && $data['plan_name'] == 'executive') {
            $amount = 20000;
            $plan = 'Executive Detailing';
        }

        if (array_key_exists('payment_type', $data) && $data['payment_type'] == 'Pay Later') {
            // Submit the form to admin
                $payment_type = 'Offline';
                Mail::to($data['email'])->send(new OrderPlaced(
                    $amount, $plan, $data['name'], $data['email'], $data['phone'], $data['location'], array_key_exists('note', $data) ? $data['note'] : '', 'Onsite', $payment_type, 'Your request has been received!', 'user'
                ));
                Mail::to('admin@reocarwash.com')->send(new OrderPlaced(
                    $amount, $plan, $data['name'], $data['email'], $data['phone'], $data['location'], array_key_exists('note', $data) ? $data['note'] : '', $payment_type, 'Onsite', 'A customer has placed an order!', 'admin'
                ));

                return redirect()->route('page.success');

        } else {
            // Initialize payment
            $response = Monnify::Transactions()->initializeTransaction(
                $amount,
                $data['name'],
                $data['email'],
                date('YmdHis', mt_rand(strtotime('2022-01-01'), time())),
                "Payment for a service",
                route('page.payment.callback'),
                new MonnifyPaymentMethods(
                    MonnifyPaymentMethod::CARD(),
                    MonnifyPaymentMethod::ACCOUNT_TRANSFER()
                ),
                (object)[
                    'plan' => $plan,
                    'customer_name' => $data['name'],
                    'email' => $data['email'],
                    'phone' => $data['phone'],
                    'location' => $data['location'],
                    'notes' => array_key_exists('note', $data) ? $data['note'] : '',
                    'payment_type' => array_key_exists('payment_type', $data) ? $data['payment_type'] : 'CARD',
                ]
            );

            session()->put('transactionReference', $response->transactionReference);
            session()->put('paymentReference', $response->paymentReference);

            return redirect($response->checkoutUrl);
        }
    }

    public function success(Request $request) {
        return view('pages.success');
    }

    public function failed(Request $request) {
        return view('pages.failed');
    }

    public function callback(Request $request) {
        $transactionReference = session()->get('transactionReference');
        $paymentReference = session()->get('paymentReference');

        if ($transactionReference) {
            $response = Monnify::Transactions()->getTransactionStatus($transactionReference);

            if ($response) {
                if ($response->paymentStatus == 'PAID') {
                    $amount = $response->amountPaid;
                    $plan = $response->metaData->plan;
                    $name = $response->metaData->customer_name;
                    $email = $response->metaData->email;
                    $phone = $response->metaData->phone;
                    $location = $response->metaData->location;
                    $notes = $response->metaData->notes;
                    $payment_type = 'online';


                    // Send mail to the management
                    Mail::to($email)->send(new OrderPlaced(
                        $amount, $plan, $name, $email, $phone, $location, $notes, $transactionReference, $payment_type, 'Your request has been received!', 'user'
                    ));
                    Mail::to('admin@reocarwash.com')->send(new OrderPlaced(
                        $amount, $plan, $name, $email, $phone, $location, $notes, $payment_type, $transactionReference, 'A customer has placed an order!', 'admin'
                    ));

                    session()->remove('transactionReference');
                    session()->remove('paymentReference');
                    session()->remove('checkoutPage');

                    return redirect()->route('page.success');
                }
            }
        }
        session()->remove('transactionReference');
        session()->remove('paymentReference');
        $checkoutPage = session()->get('checkoutPage');

        if ($checkoutPage) {
            return redirect($checkoutPage);
        }
        session()->remove('checkoutPage');
        return redirect()->route('page.failed');

    }
}
