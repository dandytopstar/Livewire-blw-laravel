<?php

return [

    'stripe_secret' => env('STRIPE_SECRET', 'sk_test_51ItEApEn9zFFy6xp3Yz0bCGap6bnMV03eMv5VjnZNUwW7qN7ahJVNZgfSaMduqrU2iQPCxvjh90KBUWfi6Jes36Z00KEqzOrvN'),

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
