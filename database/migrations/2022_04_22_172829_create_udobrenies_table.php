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
        Schema::create('udobrenies', function (Blueprint $table) {
            $table->id();

            //Группа культур	Район	Стоимость	Описание	Назначение
            //ссылка на таблицу	строка	число с точкой(2 знака после точки)	строка	строка

            $table->string("naimenovanie");
            $table->float("norma_azota", 8,2)->nullable();
            $table->float("norma_fosfor", 8,2)->nullable();
            $table->float("norma_calii", 8,2)->nullable();
            $table->unsignedBigInteger('grupa_kultur_id')->nullable();
            $table->string("raion")->nullable();
            $table->float("stoimosti", 8,2)->nullable();
            $table->string("denumire");
            $table->string("opisanie")->nullable();
            $table->string("naznachenie")->nullable();

            $table->timestamps();
            $table->softDeletes();

            $table->index('grupa_kultur_id','grupa_kultur_idx');
            $table->foreign('grupa_kultur_id','grupa_kultur_fk')->on('grupa_kulturs')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('udobrenies');
    }
};
