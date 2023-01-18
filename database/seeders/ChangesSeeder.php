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
            'billed_period' => 'Billed every 3 months',
            'period' => 3,
            'billed_price' => 59.97,
            'billed_price_old' => 98.97,
            'payment_period' => 'per month',
            'payment_price' => 19.99,
            'payment_price_old' => 32.99,
            'discount' => 39,
            'stripe_id' => 'price_1MRZL4En9zFFy6xp9Se1YUVs',
        ]);

        PersonalPlan::query()->where('name', '6-month BLW Plan' )->update([
            'period' => 6,
            'billed_period' => 'Billed every 6 months',
            'billed_price' => 71.94,
            'billed_price_old' => 197.94,
            'payment_period' => 'per month',
            'payment_price' => 11.99,
            'payment_price_old' => 32.99,
            'discount' => 63,
            'stripe_id' => 'price_1MRa0tEn9zFFy6xppyOk2TK2',
        ]);

        PersonalPlan::query()->where('name', '1-month BLW Plan' )->update([
            'billed_period' => 'Billed every month',
            'payment_period' => 'per month',
            'billed_price' => 32.99,
            'payment_price' => 32.99,
            'period' => 1,
            'stripe_id' => 'price_1MRa2BEn9zFFy6xpvre5QGq8',
        ]);
    }
}