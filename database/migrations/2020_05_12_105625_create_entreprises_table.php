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
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('date');
            $table->string('numero');
            $table->string('tva');
            $table->string('adresse');
            $table->string('domaine');
            $table->string('logo');
            $table->string('pNom');
            $table->string('pTel');
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
        Schema::dropIfExists('entreprises');
    }
}
