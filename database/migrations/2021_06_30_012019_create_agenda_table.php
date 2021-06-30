<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agenda', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo',80);
            $table->date('dia');
            $table->time('hora');
            $table->unsignedBigInteger('id_produto');
            $table->foreign('id_produto')->references('id')->on('produto')->onDelete('cascade');
            $table-> unsignedBigInteger('id_dono');
            $table->foreign('id_dono')->references('id')->on('dono')->onDelete('cascade');
            $table-> unsignedBigInteger('id_cachorro');
            $table->foreign('id_cachorro')->references('id')->on('cachorro')->onDelete('cascade');
            $table-> unsignedBigInteger('id_funcionario');
            $table->foreign('id_funcionario')->references('id')->on('funcionario')->onDelete('cascade');
            $table->string('preco',15);
            $table->string('info',200);
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
        Schema::dropIfExists('agenda');
    }
}
