<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserLog>
 */
class UserLogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
        'access_datetime'=>$this->faker->date(),
        'expired'=>$this->faker->date(),
        'token'=>Str::random(16),
        'username'=>$this->faker->userName(),
        'ip'=>mt_rand(0, 255) . "." . mt_rand(0, 255) . "." . mt_rand(0, 255) . "." . mt_rand(0, 255),
        'useragent'=>$this->faker->userName(),
        'stat'=>$this->faker->randomElement(['T','F'])
        ];
    }
}
