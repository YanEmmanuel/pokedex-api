<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pokemon>
 */
class PokemonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $pokemons = [
            ['name' => 'Pikachu', 'raridade' => 5, 'image' => 'pikachu.png'],
            ['name' => 'Charmander', 'raridade' => 3, 'image' => 'charmander.png'],
            ['name' => 'Bulbasaur', 'raridade' => 4, 'image' => 'bulbasaur.png'],
            ['name' => 'Squirtle', 'raridade' => 4, 'image' => 'squirtle.png'],
            ['name' => 'Jigglypuff', 'raridade' => 2, 'image' => 'jigglypuff.png'],
        ];

        $pokemon = $this->faker->randomElement($pokemons);

        return [
            'name'=>$pokemon['name'],
            'raridade'=>$pokemon['raridade'],
            'image'=>$pokemon['image']
        ];
    }
}
