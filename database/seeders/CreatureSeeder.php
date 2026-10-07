<?php

namespace Database\Seeders;

use App\Models\Creature;
use Illuminate\Database\Seeder;


class CreatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Creature::factory(10)->create();
    }
}
