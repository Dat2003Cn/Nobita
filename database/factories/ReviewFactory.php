<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "user_id" => User::factory('id')->create()->id,
            "product_id" => Product::factory('id')->create()->id,
            "rating"=>$this->faker->numerify(),
            "comment"=>$this->faker->text(),
            "reviewdate"=>$this->faker->date(),
        ];
    }
}
