<?php

use App\Http\Controllers\PokemonsController;
use App\Http\Controllers\TesteController;
use Illuminate\Support\Facades\Route;

Route::prefix('/')->controller(PokemonsController::class)->group(function(){
    Route::get('/', 'pokemons');
    Route::get('pokemon/{id}', 'pokemons_id');
    Route::post('create', 'create_pokemon');
});