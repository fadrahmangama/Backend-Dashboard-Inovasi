<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
            'title'=> $this->faker->sentence(),
            'input_date'=>$this->faker->date(),
            'status_publish'=>$this->faker->randomElement(['T','F']),
            'news_content'=>$this->faker->sentence(),
            'author'=>$this->faker->name(),
            'thumbnail_image'=>$this->faker->image()
        ];
    }
}
