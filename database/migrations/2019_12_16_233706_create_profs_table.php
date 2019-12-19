<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profs', function (Blueprint $table) {
            $table->string('id_prof');
            $table->unsignedBigInteger('id_user');
            $table->string('Nom')->nullable($value = false);
            $table->string('Prenom')->nullable($value = false);
            $table->string('matiere');
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('matiere')->references('id_matiere')->on('matieres');
            $table->primary('id_prof');
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
        Schema::dropIfExists('profs');
    }
}
