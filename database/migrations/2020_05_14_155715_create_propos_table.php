<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('entreprise_id')->unsigned();
            $table->foreign('entreprise_id')->on('entreprises')
            ->references('id')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->bigInteger('talent_id')->unsigned();
            $table->foreign('talent_id')->on('talents')
            ->references('id')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->bigInteger('offre_id')->unsigned();
            $table->foreign('offre_id')->on('offres')
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
        Schema::dropIfExists('propos');
    }
}
