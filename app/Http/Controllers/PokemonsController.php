<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonsController extends Controller
{
    public function pokemons(){
        $pokemon = Pokemon::with('status')->paginate(10);
        return $pokemon;
    }
}