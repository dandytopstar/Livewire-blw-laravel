<?php

return [

    'stripe_secret' => env('STRIPE_SECRET', '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'),

    'personal_plans' => [
        [
          'title' => 3,
          'prise_old' => 7.50,
          'prise_sale' => 5.00,
          'per_week_old_prise' => 85.97,
          'per_week_sale_prise' => 59.97,
          'period' => 3,
        ],
        [
            'title' => 6,
            'prise_old' => 7.50,
            'prise_sale' => 3.75,
            'per_week_old_prise' => 179.94,
            'per_week_sale_prise' => 89.97,
            'period' => 6,
        ],
        [
            'title' => 1,
            'prise_old' => '',
            'prise_sale' => 7.50,
            'per_week_old_prise' => '',
            'per_week_sale_prise' => '',
            'per_week_normal_prise' => 29.99,
            'period' => 3,
        ],
    ],

];
