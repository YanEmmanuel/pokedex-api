<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class PokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = database_path('data/pokemons.json');
        $pokemons = json_decode(File::get($json), true);

        foreach ($pokemons as $pokemon) {
            DB::table('pokemons')->insert([
                'image' => $pokemon['image'],
                'name' => $pokemon['name'],
                'type' => json_encode($pokemon['type']),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        };
    }
}
