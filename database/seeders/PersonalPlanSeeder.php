<?php

namespace Database\Seeders;

use App\Models\PersonalPlan;
use Illuminate\Database\Seeder;

class PersonalPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $existPersonalPlans = PersonalPlan::query()->get();

        $personalPlans = [
            1 => [
                'name' => '3-month <br>Baby-Led Weaning <br>Meal Plan',
                'billed_period' => 'Billed every 3 months',
                'period' => 3,
                'payment_period' => 'per week',
                'payment_price' => 4.99,
                'payment_price_old' => 8.24,
                'billed_price' => 59.97,
                'billed_price_old' => 98.97,
                'discount_price' => 39.00,
                'discount' => 39,
                'stripe_id' => 'price_1MRgOKLAfRRz3YR8WmToXHzU',
            ],
            2 => [
                'name' => '6-month <br>Baby-Led Weaning <br>Meal Plan',
                'billed_period' => 'Billed every 6 months',
                'period' => 6,
                'payment_period' => 'per week',
                'payment_price' => 2.99,
                'payment_price_old' => 8.24,
                'billed_price' => 71.94,
                'billed_price_old' => 197.94,
                'discount_price' => 126.00,
                'discount' => 63,
                'stripe_id' => 'price_1MRgPMLAfRRz3YR8WVPWkzbl',
            ],
            3 => [
                'name' => '1-month <br>Baby-Led Weaning Meal Plan',
                'billed_period' => 'Billed every month',
                'period' => 1,
                'payment_period' => 'per week',
                'payment_price' => 8.24,
                'billed_price' => 8.24,
                'stripe_id' => 'price_1MRgMrLAfRRz3YR8Az0LRFIz',
            ]
        ];

        foreach($personalPlans as $key => $plan) {
            if ($existPersonalPlans->where('id', $key)->first()) {
                PersonalPlan::query()->where('id', $key)->update($plan);
            } else {
                PersonalPlan::query()->create($plan);
            }
        }
    }
}
