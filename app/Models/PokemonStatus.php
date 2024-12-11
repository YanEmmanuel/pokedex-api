<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PokemonStatus extends Model
{   
    protected $table = 'pokemons_status';
    
    protected $fillable = [
        'HP',
        'Attack', 
        'Defense', 
        'SpAtk', 
        'SpDef', 
        'Speed', 
        'Total'];

    protected $hidden = [
        'id',
        'pokemon_id',
        'created_at',
        'updated_at'
    ];
    
    public function pokemon()
    {
        return $this->belongsTo(Pokemon::class, 'pokemon_id', 'id');
    }
}
