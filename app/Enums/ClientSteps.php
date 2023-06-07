<?php

namespace App\Enums;

enum ClientSteps: string
{
    case FINISHED_QUIZ = 'Finished Quiz';
    case FINISHED_BOOK_QUIZ = 'Finished BOOK Quiz';
    case ORDERED_PERSONAL_PLAN = 'Ordered Personal Plan';
}