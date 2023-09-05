<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderDetail>
 */
class OrderDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            "order_id" => Order::factory('id')->create()->id,
            "product_id" => Product::factory('id')->create()->id,
            "quantity"=>$this->faker->randomNumber(),
            "uniprice"=>$this->faker->numberBetween(),
            "totalprice"=>$this->faker->numberBetween(),
        ];
    }
}
