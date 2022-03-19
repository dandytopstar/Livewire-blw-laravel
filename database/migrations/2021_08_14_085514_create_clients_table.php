<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('country')->nullable();
            $table->string('code')->nullable();
            $table->string('payment_method')->nullable()->default(null);
            $table->string('omnisend_id')->nullable();
            $table->enum('status', ['free', 'paid']);
            $table->enum('gender', ['boy','girl']);
            $table->integer('age')->nullable();
            $table->float('height')->nullable();
            $table->float('weight')->nullable();
            $table->float('affected')->nullable();
            $table->float('checked')->nullable();
            $table->float('target_weight')->nullable();
            $table->enum('unit_system', ['metric', 'imperial']);
            $table->string('utma')->nullable();
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
        Schema::dropIfExists('clients');
    }
}
