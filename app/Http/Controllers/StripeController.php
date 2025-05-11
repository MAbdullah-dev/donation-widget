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
        return response()->make('
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>Donation Successful</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    text-align: center;
                    padding: 50px;
                    background-color: #f0f8f5;
                }
                h1 {
                    color: #28a745;
                }
                a {
                    text-decoration: none;
                    color: #007bff;
                }
            </style>
        </head>
        <body>
            <h1>🎉 Thank you for your donation!</h1>
            <p>Your transaction was successful.</p>
            <a href="/">Return to Home</a>
        </body>
        </html>
    ');
    }

    public function handleCancel()
    {
        return response()->make('
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>Donation Canceled</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    text-align: center;
                    padding: 50px;
                    background-color: #fff5f5;
                }
                h1 {
                    color: #dc3545;
                }
                a {
                    text-decoration: none;
                    color: #007bff;
                }
            </style>
        </head>
        <body>
            <h1>❌ Donation was canceled</h1>
            <p>You can try again if you wish.</p>
            <a href="/">Return to Home</a>
        </body>
        </html>
    ');
    }
}
