<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 1; $i <= 50; $i++) {

            Article::create([
                'title' => 'タイトル ' . $i,
                'content' => fake()->realText(50)
            ]);

        }
    }
}
