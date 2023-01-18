<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_plans', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('billed_period')->nullable();
            $table->decimal('billed_price',9,2)->nullable();
            $table->decimal('billed_price_old',9,2)->nullable();
            $table->string('payment_period')->nullable();
            $table->decimal('payment_price',9,2)->nullable();
            $table->decimal('payment_price_old',9,2)->nullable();
            $table->boolean('enabled')->default(true);
            $table->integer('discount')->default(0);
            $table->integer('period')->nullable();
            $table->string('stripe_id')->nullable();
            $table->string('paypal_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal_plans');
    }
};
