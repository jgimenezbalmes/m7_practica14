<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Pokemon;
use Faker\Generator as Faker;

class PokemonFactory extends Factory
{
    protected $model = Pokemon::class;

    public function definition()
    {
        return [
            'nom' => $this->faker->unique()->text(50),
            'tipus_elemental'=>$this->faker->paragraph(3),
            'nivell_evolucio'=>$this->faker->numberBetween(1,100),
            'genere'=>$this->faker->randomElement(['M','F']),
            'habitat'=>$this->faker->optional()->paragraph,
            'observacions'=>$this->faker->optional()->paragraph
        ];
    }
}
