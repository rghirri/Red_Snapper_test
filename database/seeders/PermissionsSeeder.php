<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Permissions;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Permissions::create([
            'name' => 'Admin'
        ]);
        Permissions::create([
            'name' => 'Write'
        ]);
        Permissions::create([
            'name' => 'Editor'
        ]);
        Permissions::create([
            'name' => 'finance'
        ]);
       
    }
}