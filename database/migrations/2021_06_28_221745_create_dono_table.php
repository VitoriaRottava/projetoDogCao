<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dono', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome',40);
            $table->string('cpf',14);
            $table->string('telefone',20);
            $table->string('email',40);
            $table->string('endereco',80);
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
        Schema::dropIfExists('dono');
    }
}
