<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'user_id' => User::factory(),
            'category_id'=>Category::factory(),
            'thumbnail' => "thumbnails/c4qzpnKZdcb0TMEy4vko1Vrx1cgbWSaoucIBhlOu.jpg",
            'title' => $this->faker->text(50),
            'slug' => $this->faker->text(10),
            'excerpt' => $this->faker->text(20),
            'body' => $this->faker->text(500),
        ];
    }
}
