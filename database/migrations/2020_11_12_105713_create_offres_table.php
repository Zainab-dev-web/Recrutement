<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offres', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->on('users')
            ->references('id')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->bigInteger('statut_id')->unsigned();
            $table->foreign('statut_id')->on('statuts')
            ->references('id')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->string('poste');
            $table->string('lieu');
            $table->text('qualite');
            $table->text('description');
            $table->timestamps();
        });
         Schema::create('offre_user', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('offre_id')->unsigned();
            $table->foreign('offre_id')->on('offres')
            ->references('id')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->on('users')
            ->references('id')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offres');
    }
}
