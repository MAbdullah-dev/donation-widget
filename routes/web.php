<?php

use App\Http\Controllers\StripeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::post('/create-checkout-session', [StripeController::class, 'createCheckoutSession'])->name('create-checkout-session');

// Stripe success + cancel routes (must be defined for redirection)
Route::get('/donation/success', [StripeController::class, 'handleSuccess'])->name('donation.success');
Route::get('/donation/canceled', [StripeController::class, 'handleCancel'])->name('donation.cancel');
