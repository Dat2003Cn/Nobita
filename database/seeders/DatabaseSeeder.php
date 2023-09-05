<?php

namespace Database\Seeders;

use App\Models\OrderDatail;
use Database\Factories\OrderFactory;
use Database\Factories\ReviewFactory;
use Database\Factories\UserFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() 

    
    {

        $this->call([
            UserSeeder::class,
            ReviewSeeder::class,
            ProductSeeder::class,
            OrderSeeder::class,
            OrderDatailSeeder::class,
            FeedbackSeeder::class,
            CategorySeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();
        // \App\Models\Review::factory(10)->create();
        // \App\Models\Product::factory(10)->create();
        // \App\Models\Order::factory(10)->create();
        // \App\Models\OrderDatail::factory(10)->create();
        // \App\Models\Feedback::factory(10)->create();
        // \App\Models\Category::factory(10)->create();

    }
}
