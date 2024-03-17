<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = \Faker\Factory::create('id_ID');
        for ($i=0;$i<10;$i++){
            Article::create([
                'title'=> $faker->sentence(),
                'input_date'=>$faker->date(),
                'status_publish'=>$faker->randomElement(['T','F']),
                'news_content'=>$faker->sentence(),
                'author'=>$faker->name(),
                'thumbnail_image'=>$faker->image()
            ]);
        }
    }
}
