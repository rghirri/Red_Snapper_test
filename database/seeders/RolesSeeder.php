<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Roles;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Roles::create([
            'name' => 'Prescriber'
        ]);
        Roles::create([
            'name' => 'Accounts'
        ]);
        Roles::create([
            'name' => 'Patient Data'
        ]);
        Roles::create([
            'name' => 'Personal Data'
        ]);
        Roles::create([
            'name' => 'Calendar'
        ]);

    }
}