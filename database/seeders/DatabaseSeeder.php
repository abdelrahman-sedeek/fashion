<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'abdlerahman',
            'email' => 'abdurahmansedeek@gmail.com',
            'userType' => 'admin',
            'password' => Hash::make('01120822035'),
        ]);
        \App\Models\User::factory()->create([
            'name' => 'user',
            'email' => '123@gmail.com',
            'userType' => 'user',
            'password' => Hash::make('123456789'),
        ]);
    }
}
