<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    protected $table = 'pokemons';

    protected $fillable = [
        'image',
        'name',
        'type',
        'pokemon_id',
    ];

    public function casts(): array
    {
        return [
            'type' => 'array',
        ];
    }
    
    public function status()
    {
        return $this->hasOne(PokemonStatus::class, 'pokemon_id', 'id');
    }
    
}
