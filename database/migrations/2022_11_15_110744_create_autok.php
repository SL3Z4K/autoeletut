<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auto', function (Blueprint $table) {
            $table->id('id_auto');
            $table->string('rendszam');
            $table->string('tipus');
            $table->string('szin');
        });
        Schema::create('tulaj', function (Blueprint $table) {
            $table->id('id_tulaj');
            $table->string('tulajnev');
            $table->date('tulajkezd');
            $table->date('tulajvege');
        });
        Schema::create('baleset', function (Blueprint $table) {
            $table->id('id_baleset');
            $table->date('balesetido');
            $table->string('serules');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('autok');
    }
};
