<?php

namespace App\Enums;

enum PaymentMethods:string
{
    case STRIPE = 'stripe';
    case PAYPAL = 'paypal';
}