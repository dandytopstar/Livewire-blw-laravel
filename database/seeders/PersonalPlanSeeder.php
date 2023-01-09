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
            'billed_price' => 59.97,
            'billed_price_old' => 85.97,
            'payment_period' => 'per week',
            'payment_price' => 5.00,
            'payment_price_old' => 7.50,
        ]);

        PersonalPlan::query()->create([
            'name' => '6-month BLW Plan',
            'billed_period' => 'Billed every 6 months',
            'billed_price' => 89.97,
            'billed_price_old' => 179.94,
            'payment_period' => 'per week',
            'payment_price' => 3.75,
            'payment_price_old' => 7.50,
        ]);

        PersonalPlan::query()->create([
            'name' => '1-month BLW Plan',
            'billed_period' => 'Billed every month',
            'payment_period' => 'per week',
            'payment_price' => 7.50,
        ]);
    }
}
