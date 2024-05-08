<?php

namespace Database\Seeders;

use App\Models\Ensignant;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EnsignantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Ensignant::factory()->count(50)->create();
    }
}
