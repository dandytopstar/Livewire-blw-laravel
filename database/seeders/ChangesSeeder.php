<?php

namespace Database\Seeders;

use App\Models\PersonalPlan;
use Illuminate\Database\Seeder;

class ChangesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PersonalPlan::query()->where('name', '3-month BLW Plan' )->update([
            'name' => '3-month BLW Plan',
            'billed_period' => 'Billed every 3 months',
            'period' => 3,
            'billed_price' => 59.97,
            'billed_price_old' => 98.97,
            'payment_period' => 'per month',
            'payment_price' => 19.99,
            'payment_price_old' => 32.99,
            'discount_price' => 39.00,
            'discount' => 0,
            'stripe_id' => 'price_1MRgOKLAfRRz3YR8WmToXHzU',
            'paypal_id' => 'P-2W2292030D7885326MPED4CY',
        ]);

        PersonalPlan::query()->where('name', '6-month BLW Plan' )->update([
            'name' => '6-month BLW Plan',
            'billed_period' => 'Billed every 6 months',
            'period' => 6,
            'billed_price' => 71.94,
            'billed_price_old' => 197.94,
            'payment_period' => 'per month',
            'payment_price' => 11.99,
            'payment_price_old' => 32.99,
            'discount_price' => 126.00,
            'discount' => 63,
            'stripe_id' => 'price_1MRgPMLAfRRz3YR8WVPWkzbl',
            'paypal_id' => 'P-4BW9740053177383UMPED5HQ',
        ]);

        PersonalPlan::query()->where('name', '1-month BLW Plan' )->update([
            'name' => '1-month BLW Plan',
            'billed_period' => 'Billed every month',
            'period' => 1,
            'payment_period' => 'per month',
            'billed_price' => 32.99,
            'payment_price' => 32.99,
            'stripe_id' => 'price_1MRgMrLAfRRz3YR8Az0LRFIz',
            'paypal_id' => 'P-2X5077790X569272TMPED2SA',
        ]);
    }
}