<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client', function (Blueprint $table) {
            $table->increments('numeroClient');
            $table->MediumText('nom');
            $table->MediumText('email');
            $table->MediumText('carteBancaire');
            //$table->timestamps();
            $table->foreign('matricule')->references('matricule')->on('vehicules');
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
        Schema::dropIfExists('client');
    }
}
