<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function subscriptionSend(Request $request): RedirectResponse
    {
        return redirect()->route('subscription-email-sent');
    }
}
