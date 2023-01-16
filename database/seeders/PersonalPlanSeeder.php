<?php

namespace Database\Seeders;

use App\Models\PersonalPlan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        PersonalPlan::query()->create([
            'name' => '3-month BLW Plan',
            'billed_period' => 'Billed every 3 months',
            'period' => 3,
            'billed_price' => 59.97,
            'billed_price_old' => 98.97,
            'payment_period' => 'per month',
            'payment_price' => 19.99,
            'payment_price_old' => 32.99,
        ]);

        PersonalPlan::query()->create([
            'name' => '6-month BLW Plan',
            'period' => 6,
            'billed_period' => 'Billed every 6 months',
            'billed_price' => 71.94,
            'billed_price_old' => 197.94,
            'payment_period' => 'per month',
            'payment_price' => 11.99,
            'payment_price_old' => 32.99,
            'offer' => '63%',
        ]);

        PersonalPlan::query()->create([
            'name' => '1-month BLW Plan',
            'billed_period' => 'Billed every month',
            'payment_period' => 'per month',
            'billed_price' => 32.99,
            'payment_price' => 32.99,
            'period' => 1,
        ]);
    }
}
