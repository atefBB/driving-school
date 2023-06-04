<?php

namespace Database\Seeders;

use App\Models\School;
use Illuminate\Database\Seeder;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        School::factory()
            ->count(5)
            ->hasAddress()
            ->hasPhone()
            ->create();
    }
}
