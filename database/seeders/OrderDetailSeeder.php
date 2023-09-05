<?php

namespace Database\Seeders;

use App\Models\OrderDatail;
use App\Models\OrderDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        OrderDatail::factory()->count(10)->create();
    }
}
