<?php

namespace Database\Seeders;

use App\Enums\PersonalPlanTypesEnum;
use App\Models\PersonalPlan;
use Illuminate\Database\Seeder;

class TestSeeder extends Seeder
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
                'stripe_id' => 'price_1MRZL4En9zFFy6xp9Se1YUVs',
                'paypal_id' => 'P-94M157530X699270YMPDOZZA',
                'type' => PersonalPlanTypesEnum::STANDARD_SUBSCRIBING->value,
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
                'stripe_id' => 'price_1MRa0tEn9zFFy6xppyOk2TK2',
                'paypal_id' => 'P-65268280H8736405TMPEOXDA',
                'type' => PersonalPlanTypesEnum::STANDARD_SUBSCRIBING->value,
            ],
            3 => [
                'name' => '1-month <br>Baby-Led Weaning Meal Plan',
                'billed_period' => 'Billed every month',
                'period' => 1,
                'payment_period' => 'per week',
                'payment_price' => 8.24,
                'billed_price' => 8.24,
                'stripe_id' => 'price_1MRa2BEn9zFFy6xpvre5QGq8',
                'paypal_id' => 'P-5LU23034JM266393MMPEOXUA',
                'type' => PersonalPlanTypesEnum::STANDARD_SUBSCRIBING->value,
            ],
            4 => [
                'name' => 'Personalized BLW Book Paperback',
                'billed_period' => 'The E-Book is included in the price',
                'payment_price' => 82,
                'payment_price_old' => 95.94,
                'stripe_id' => 'price_1MRgPMLAfRRz3YR8WVPWkzbl',
                'paypal_id' => 'P-4BW9740053177383UMPED5HQ',
                'type' => PersonalPlanTypesEnum::BOOK_PAYMENT->value,
            ],
            5 => [
                'name' => 'E-Book',
                'billed_period' => 'Price without assistant app or paperback book',
                'payment_price' => 31,
                'payment_price_old' => 55.24,
                'discount' => 33,
                'stripe_id' => 'price_1MRgPMLAfRRz3YR8WVPWkzbl',
                'paypal_id' => 'P-4BW9740053177383UMPED5HQ',
                'type' => PersonalPlanTypesEnum::BOOK_PAYMENT->value,
            ],
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