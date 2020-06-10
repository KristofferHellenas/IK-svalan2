<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedlemmarFotbollTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medlemmar_fotboll', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('medlemmar_id')->unsigned()->index();
            $table->foreign('medlemmar_id')
                ->references('id')->on('medlemmars')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
            
            $table->bigInteger('fotboll_id')->unsigned()->index();
            $table->foreign('fotboll_id')
                ->references('id')->on('fotbolls')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medlemmar_fotboll');
    }
}
