<?php

use App\Enums\PersonalPlanTypesEnum;
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
        Schema::table('personal_plans', function (Blueprint $table) {
            $table->string('type')
                ->after('name')
                ->default(PersonalPlanTypesEnum::STANDARD_SUBSCRIBING->value);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('personal_plans', function (Blueprint $table) {
            $table->dropColumn('type');
        });
    }
};
