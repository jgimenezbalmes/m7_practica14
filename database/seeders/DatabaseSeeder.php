<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
//use App\Models\Article;
//use Database\Factories\ArticleFactory;
use App\Models\Pokemon;
use Database\Factories\PokemonFactory;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Pokemon::newFactory()->count(25)->create();
        //Article::newFactory()->count(1000)->create();
        //factory(Article::class, 1000)->create();
    }
}
