<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCachorroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cachorro', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome',40);
            $table->string('porte',20);
            $table->string('pelagem',50);
            $table->string('sexo',20);
            $table->string('idade',40);
            $table->string('cor',80);
            $table->string('shampoo_preferido',80);
            $table-> unsignedBigInteger('id_dono');
            $table->timestamps();
        });

        Schema::table('cachorro', function (Blueprint $table) {

            $table->foreign('id_dono')->references('id')->on('dono')->onDelete('cascade');
        });}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cachorro');
    }
}
