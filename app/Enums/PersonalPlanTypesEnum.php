<?php

namespace App\Enums;

enum PersonalPlanTypesEnum: string
{
    case STANDARD_SUBSCRIBING = 'standard_subscribing';
    case BOOK_PAYMENT = 'book_payment';
}