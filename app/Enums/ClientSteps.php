<?php

namespace App\Enums;

enum ClientSteps: string
{
    case FINISHED_QUIZ = 'Finished Quiz';
    case ORDERED_PERSONAL_PLAN = 'Ordered Personal Plan';
}