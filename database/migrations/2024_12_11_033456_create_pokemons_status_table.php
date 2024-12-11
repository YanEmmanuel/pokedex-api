<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pokemons_status', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pokemon_id')
                  ->constrained('pokemons')
                  ->onDelete('cascade');
            $table->integer('HP');
            $table->integer('Attack');
            $table->integer('Defense');
            $table->integer('SpAtk');
            $table->integer('SpDef');
            $table->integer('Speed');
            $table->integer('Total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pokemons_status');
    }
};
