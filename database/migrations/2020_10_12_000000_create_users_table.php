<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prénom')->nullable();
            $table->string('photo')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('numero');
            $table->string('adresse');
            $table->bigInteger('statut_id')->unsigned()->nullable();
            $table->foreign('statut_id')->on('statuts')
            ->references('id')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->string('véhicule')->nullable();
            $table->string('dispo')->nullable();
            $table->string('domaine');
            $table->string('cv')->nullable();
            $table->string('date')->nullable();
            $table->string('tva')->nullable();
            $table->string('logo')->nullable();
            $table->string('pNom')->nullable();
            $table->string('pTel')->nullable();
            $table->string('valid');
            $table->bigInteger('role_id')->unsigned();
            $table->foreign('role_id')->on('roles')
            ->references('id')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
