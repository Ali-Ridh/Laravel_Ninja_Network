<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Barber;

class BarberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Barber::insert([
            ['Name' => 'Mario', 'Job' => 'Plumber', 'Age' => 45],
            ['Name' => 'Luigi', 'Job' => 'Plumber', 'Age' => 39],
            ['Name' => 'Peach', 'Job' => 'Princess', 'Age' => 43],
            ['Name' => 'Toad', 'Job' => 'A Shroom Thing idk', 'Age' => 25],
            ['Name' => 'Yoshi', 'Job' => 'A Dinosaur', 'Age' => 32],
        ]);
        Barber::factory()->count(50)->create();
    }
}
