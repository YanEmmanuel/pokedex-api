<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonsController extends Controller
{
    public function pokemons(Request $request)
    {
        $name = $request->query('name');
        if(!isset($name))
        {
            $name = '';
        }
        $searchable = Pokemon::with('status')->where('name', 'like', '%'.$name.'%')->paginate(20);
        return $searchable;
    }

    public function pokemons_id($id)
    {
        $pokemon = Pokemon::with('status')->where('id', $id)->firstOrFail();
        return $pokemon;
    }

    public function create_pokemon(Request $request)
    {
        //
    }
}
