<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTextosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('textos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_tipo_texto')->unsigned()->index();
            $table->text('texto');
            $table->text('video')->nullable();
            $table->text('img')->nullable();
            $table->string('estado')->default('on');
            $table->timestamps();
        });

        Schema::table('textos', function (Blueprint $table) {
          $table->foreign('id_tipo_texto')->references('id')->on('textos')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('textos');
    }
}
