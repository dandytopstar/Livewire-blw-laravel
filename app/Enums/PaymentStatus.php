<?php

namespace App\Enums;

enum PaymentStatus:string
{
    case FREE = 'free';
    case PAID = 'paid';
}