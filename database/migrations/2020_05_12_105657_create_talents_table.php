<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTalentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('talents', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prénom');
            $table->string('photo');
            $table->string('email');
            $table->string('numero');
            $table->string('adresse');
            $table->bigInteger('statut_id')->unsigned();
            $table->foreign('statut_id')->on('statuts')
            ->references('id')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->string('véhicule');
            $table->string('dispo');
            $table->string('domaine');
            $table->string('cv')->nullable();
            $table->string('valid');
            $table->bigInteger('role_id')->unsigned();
            $table->foreign('role_id')->on('roles')
            ->references('id')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->string('password');
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
        Schema::dropIfExists('talents');
    }
}
