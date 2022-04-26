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
        Schema::table('udobrenies', function (Blueprint $table) {
            //
            $table->dropColumn("denumire");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('udobrenies', function (Blueprint $table) {
            //
            $table->string("denumire")->nullable()->after("stoimosti");
        });
    }
};
