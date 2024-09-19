<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Braintree\Gateway;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    protected $gateway;

    public function __construct()
    {
        $this->gateway = new Gateway([
            'environment' => config('braintree.environment'),
            'merchantId' => config('braintree.merchantId'),
            'publicKey' => config('braintree.publicKey'),
            'privateKey' => config('braintree.privateKey'),
        ]);
    }

    public function showPaymentForm()
    {
        $clientToken = $this->gateway->clientToken()->generate();

        return view('payment.form', compact('clientToken'));
    }

    public function processPayment(Request $request)
    {
        $result = $this->gateway->transaction()->sale([
            'amount' => $request->amount,
            'paymentMethodNonce' => $request->payment_method_nonce,
            'options' => [
                'submitForSettlement' => true,
            ],
        ]);

        if ($result->success) {
            return redirect()->back()->with('success', 'Transazione riuscita: ' . $result->transaction->id);
        } else {
            return redirect()->back()->with('error', 'Transazione fallita: ' . $result->message);
        }
    }
}
