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
        Schema::table('grupa_kulturs', function (Blueprint $table) {
            //
            $table->renameColumn("Naimenovanie", "naimenovanie");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('grupa_kulturs', function (Blueprint $table) {
            //
            $table->renameColumn("naimenovanie", "Naimenovanie");
        });
    }
};
