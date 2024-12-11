<?php

namespace Database\Seeders;

use App\Models\PokemonStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class PokemonStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = database_path('data/status.json');
        $pokstatus = json_decode(File::get($json), true);
        foreach($pokstatus as $status){
            DB::table('pokemons_status')->insert([
                "pokemon_id" => $status['pokemon_id'],
                "HP" => $status['HP'],
                "Attack" => $status['Attack'],
                "Defense" => $status['Defense'],
                "SpAtk" => $status['SpAtk'],
                "SpDef" => $status['SpDef'],
                "Speed" => $status['Speed'],
                "Total" => $status['Total'],
                "created_at" => now(),
                "updated_at" => now(),
            ]);
        }
    }
}
