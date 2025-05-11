<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Checkout\Session;

class StripeController extends Controller
{
    public function createCheckoutSession(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));

        try {
            $session = Session::create([
                'payment_method_types' => ['card'],
                'line_items' => [[
                    'price_data' => [
                        'currency' => 'usd',
                        'product_data' => [
                            'name' => 'Donation to ' . $request->missionary,
                        ],
                        'unit_amount' => $request->amount,
                    ],
                    'quantity' => 1,
                ]],
                'mode' => 'payment',
                'success_url' => url('/donation/success?session_id={CHECKOUT_SESSION_ID}'),
                'cancel_url' => url('/donation/canceled'),
                'metadata' => [
                    'missionary' => $request->missionary,
                    'donor_name' => $request->donor_name,
                    'donor_email' => $request->donor_email,
                    'is_anonymous' => $request->is_anonymous,
                    'message' => $request->message
                ],
            ]);

            return response()->json(['sessionId' => $session->id]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function handleSuccess(Request $request)
    {
        // Handle successful payment
        return view('donation.success');
    }

    public function handleCancel()
    {
        // Handle canceled payment
        return view('donation.canceled');
    }
}
