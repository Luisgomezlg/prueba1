<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            $factory->define(Post::class, function (Faker $faker) {
                return [
                   'title' => $faker->sentence,
                   'slug' => \Str::slug($faker->sentence),
                   'user_id' => 1
                ];
            })
        ];
    }
}
