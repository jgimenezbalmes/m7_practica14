<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Article;
use Faker\Generator as Faker;

class ArticleFactory extends Factory
{
    
    protected $model = Article::class;

    public function definition()
    {
        return [
            'nom' => $this->faker->unique()->text(50),
            'descripcio'=>$this->faker->paragraph(3),
            'preu_compra'=>$this->faker->randomFloat(2,100,1000),
            'preu_venta'=>$this->faker->randomFloat(2,1100,2000),
            'enviament_domicili'=>$this->faker->randomElement(['S','N']),
            'stock'=>$this->faker->numberBetween(0,6000),
            'observacions'=>$this->faker->optional()->paragraph
        ];
    }
}
