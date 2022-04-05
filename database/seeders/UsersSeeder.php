<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Users;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Users::create([
            'name'      => 'Taylor',
            'email'     => 'taylor@taylor.com',
            'password'  => Hash::make('password')
        ]);
        Users::create([
            'name' => 'Jasminder',
            'email'=> 'jasminder@jasminder.com',
            'password'  => Hash::make('password')
        ]);
        Users::create([
            'name' => 'Jo',
            'email'=> 'jo@jo.com',
            'password'  => Hash::make('password')
        ]);
        Users::create([
            'name' => 'Alex',
            'email'=> 'alex@alex.com',
            'password'  => Hash::make('password')
        ]);
        Users::create([
            'name' => 'Ash',
            'email'=> 'ash@ash.com',
            'password'  => Hash::make('password')
        ]);
         Users::create([
            'name' => 'Brooke',
            'email'=> 'brooke@brooke.com',
            'password'  => Hash::make('password')
        ]);
    }
}