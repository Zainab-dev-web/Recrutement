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
            $table->bigInteger('talent_id')->unsigned()->nullable();
            $table->foreign('talent_id')->on('talents')
            ->references('id')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->bigInteger('entreprise_id')->unsigned()->nullable();
            $table->foreign('entreprise_id')->on('entreprises')
            ->references('id')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->string('impression');
            $table->string('savoir');
            $table->string('capacite');
            $table->string('serieux');
            $table->bigInteger('note_id')->unsigned();
            $table->foreign('note_id')->on('notes')
            ->references('id')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            

// Candidat absent ou présent




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
