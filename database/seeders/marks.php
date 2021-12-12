<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mark;
class marks extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mark::create(['name' => 'Chevrolet']);
        Mark::create(['name' => 'Kia']);
        Mark::create(['name' => 'Mazda']);
        Mark::create(['name' => 'Nissan']);
        Mark::create(['name' => 'Renault']);
        Mark::create(['name' => 'Suzuki']);
        Mark::create(['name' => 'Toyota']);
        Mark::create(['name' => 'Volkswagen']);
    }
}
