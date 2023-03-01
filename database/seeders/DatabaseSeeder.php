<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Article;
use Database\Factories\ArticleFactory;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Article::newFactory()->count(1000)->create();
        //factory(Article::class, 1000)->create();
    }
}
