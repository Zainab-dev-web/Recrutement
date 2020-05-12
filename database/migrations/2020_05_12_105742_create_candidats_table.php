<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidats', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('offre_id')->unsigned();
            $table->foreign('offre_id')->on('offres')
            ->references('id')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->bigInteger('talent_id')->unsigned();
            $table->foreign('talent_id')->on('talents')
            ->references('id')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->string('accept'); //(souscription)
            $table->timestamps();
        });
        Schema::create('candidat_date', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('candidat_id')->unsigned();
            $table->foreign('candidat_id')->on('candidats')
            ->references('id')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->bigInteger('date_id')->unsigned();
            $table->foreign('date_id')->on('dates')
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
        Schema::dropIfExists('candidats');
    }
}
