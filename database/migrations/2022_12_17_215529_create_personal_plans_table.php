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
            $table->float('billed_price')->nullable();
            $table->float('billed_price_old')->nullable();
            $table->string('payment_period')->nullable();
            $table->float('payment_price')->nullable();
            $table->float('payment_price_old')->nullable();
            $table->boolean('enabled')->default(true);
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
