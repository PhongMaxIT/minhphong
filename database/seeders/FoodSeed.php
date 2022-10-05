<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\T_Food;

class FoodSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        T_Food::factory()->count(8)->create();
    }
}