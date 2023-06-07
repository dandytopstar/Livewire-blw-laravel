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
                'uuid' => '6b2ead64-8474-4fde-b974-094be7fe0c31',
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
                'uuid' => 'b25beaf1-f634-4040-a0bd-ff6310918515',
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
                'uuid' => '3c8d55dd-b9cd-4ef9-af9b-940649cc2698',
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
                'uuid' => '98856f86-c20c-4347-bfd2-560c47182f90',
                'billed_period' => 'Paperback and E-Book',
                'payment_price' => 82,
                'payment_price_old' => 95.94,
                'stripe_id' => 'price_1MRgPMLAfRRz3YR8WVPWkzbl',
                'paypal_id' => 'P-4BW9740053177383UMPED5HQ',
                'type' => PersonalPlanTypesEnum::BOOK_PAYMENT->value,
            ],
            5 => [
                'name' => 'Personalized BLW E-Book',
                'uuid' => 'f775ad68-4b22-48b9-876c-7c852d438161',
                'billed_period' => 'Downloadable Digital Book',
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