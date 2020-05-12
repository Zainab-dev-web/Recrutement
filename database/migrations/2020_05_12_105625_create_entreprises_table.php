<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntreprisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entreprises', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('date');
            $table->string('numero');
            $table->string('tva');
            $table->string('adresse');
            $table->string('domaine');
            $table->string('logo');
            $table->string('pNom');
            $table->string('pEmail');
            $table->string('pTel');
            $table->string('email');
            $table->string('valid');
            $table->bigInteger('role_id')->unsigned();
            $table->foreign('role_id')->on('roles')
            ->references('id')
            ->onDelete('cascade')
            ->onUpdate('cascade');
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
        Schema::dropIfExists('entreprises');
    }
}
