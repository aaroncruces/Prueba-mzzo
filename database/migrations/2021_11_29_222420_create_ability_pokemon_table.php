<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbilityPokemonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ability_pokemon', function (Blueprint $table) {
            $table->unsignedBigInteger('ability_id');
            $table->foreign('ability_id')->references('id')->on('abilities');

            $table->unsignedBigInteger('pokemon_id');
            $table->foreign('pokemon_id')->references('id')->on('pokemon');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ability_pokemon');
    }
}
