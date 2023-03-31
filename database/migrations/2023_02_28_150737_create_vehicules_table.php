<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicules', function (Blueprint $table) {
            $table->increments('matricule');
            $table->MediumText('modele');
            $table->integer('nombredeplace');
            $table->integer('prix');
            $table->boolean('disponibilite');
            $table->timestamps();
            $table->foreign('codeReservation')->references('codeReservation')->on('reservations');
            $table->primary(['matricule', 'codeReservation']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicules');
    }
}
