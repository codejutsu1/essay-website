<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Iamolayemi\Paystack\Facades\Paystack;

class PaymentController extends Controller
{
    /**
     * Initialize a new paystack payment
     *
     * @return void
     */
    public function initialize()
    {
        // Generate a unique payment reference
        $reference = Paystack::generateReference();

        // prepare payment details from form request
        $paymentDetails = [
            'email' => request('email'),
            'amount' => request('amount'),
            'currency' => request('currency'),
            'channels' => request('channels'),
            'reference' => $reference,
            'callback_url' =>  route('callback'),
        ];

        // 'mode' => request('mode'),
        //     'topic' => request('topic'),
        //     'essay_number' => request('essay_number'),
        //     'instructions' => request('instructions'),

        // initialize new payment and get the response from the api call.
        $response = Paystack::transaction()
            ->initialize($paymentDetails)->response();

        if (!$response['status']) {
            // notify that something went wrong
        }

        // redirect to authorization url
        return redirect($response['data']['authorization_url']);
    }


    public function callback()
    {
        // get reference  from request
        $reference = request('reference') ?? request('trxref');

        // verify payment details
        $payment = Paystack::transaction()->verify($reference)->response('data');


        // check payment status
        if ($payment['status'] == 'success') {
            // payment is successful
            // code your business logic here
        } else {
            // payment is not successful
        }
    }

}