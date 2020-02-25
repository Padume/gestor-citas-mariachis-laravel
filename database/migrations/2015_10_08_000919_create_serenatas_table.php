cccc<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSerenatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('serenatas', function (Blueprint $table)
        {
            $table->increments('id');
            $table->text('direccionSerenata');
            $table->time('horaSerenata');
            $table->date('fechaSerenata');
            $table->integer('valorSerenata');
            $table->string('ObservacionSerenata');
            $table->string('departeDe');
            $table->string('dedicadoPara');
            $table->string('motivoSerenata');
            $table->string('estadoSerenata');
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
        Schema::drop('serenatas');
    }
}
