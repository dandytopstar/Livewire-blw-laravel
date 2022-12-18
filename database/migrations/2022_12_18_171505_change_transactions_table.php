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
        Schema::table('transactions', function (Blueprint $table) {
            $table->dropColumn('client_code');
            $table->dropColumn('card_no');
            $table->dropColumn('card_name');
            $table->dropColumn('plan');
            $table->bigInteger('personal_plan_id')->nullable()->after('client_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transactions', function (Blueprint $table) {
            $table->string('client_code')->nullable();
            $table->string('card_no')->nullable();
            $table->string('card_name')->nullable();
            $table->string('plan')->nullable();
            $table->dropColumn('personal_plan_id');
        });
    }
};
