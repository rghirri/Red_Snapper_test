<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Teams;

class TeamsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          Teams::create([
            'name' => 'Dentists'
        ]);
        Teams::create([
            'name' => 'Reception'
        ]);
        Teams::create([
            'name' => 'Nurses'
        ]);
        Teams::create([
            'name' => 'Hygienist'
        ]);
        Teams::create([
            'name' => 'Patients'
        ]);
    }
}