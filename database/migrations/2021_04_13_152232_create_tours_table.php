<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->integer('service_id');
            $table->dateTime('departure_date'); //дата отправления
            $table->dateTime('arrival_date'); //дата прибытия
            $table->string('photo'); //фото
            $table->integer('price');// стоимость тура
            $table->integer('transport_id');
            $table->integer('quantity_man');// количество человек
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
        Schema::dropIfExists('tours');
    }
}
