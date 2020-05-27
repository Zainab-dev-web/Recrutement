<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('presence_id')->unsigned();
            $table->foreign('presence_id')->on('presences')
            ->references('id')
            ->onDelete('cascade')
            ->onUpdate('cascade');
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
            $table->text('impression');
            $table->text('savoir');
            $table->text('capacite');
            $table->text('serieux');
            $table->bigInteger('note_id')->unsigned();
            $table->foreign('note_id')->on('notes')
            ->references('id')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->bigInteger('resultat_id')->unsigned();
            $table->foreign('resultat_id')->on('resultats')
            ->references('id')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->string('termine')->nullable();
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
        Schema::dropIfExists('evaluations');
    }
}
