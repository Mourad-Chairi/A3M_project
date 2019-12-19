<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->string('CNE');
            $table->unsignedBigInteger('id_user');
            $table->string('Nom')->nullable($value = false);
            $table->string('Prenom')->nullable($value = false);
            $table->string('class');
            $table->primary('CNE');
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('class')->references('id_classe')->on('classes');
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
        Schema::dropIfExists('etudiants');
    }
}
