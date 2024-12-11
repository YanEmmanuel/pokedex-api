<?php

use App\Http\Controllers\PokemonsController;
use App\Http\Controllers\TesteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PokemonsController::class, 'pokemons']);