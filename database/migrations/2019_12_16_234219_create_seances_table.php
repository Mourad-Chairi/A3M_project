<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seances', function (Blueprint $table) {
            $table->string('classe');
            $table->string('salle');
            $table->string('prof');
            $table->string('jour');
            $table->time('heur', 0);
            $table->time('duree',0);
            $table->foreign('classe')->references('id_classe')->on('classes');
            $table->foreign('salle')->references('id_salle')->on('salles');
            $table->foreign('prof')->references('id_prof')->on('profs');
            $table->primary(['salle','jour','heur']);
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
        Schema::dropIfExists('seances');
    }
}
