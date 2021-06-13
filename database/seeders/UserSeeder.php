<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Faker\Factory;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $faker = Factory::create();

        User::create([
            'name' => 'admin',
            'email' => 'admin@admin',
            'password' => Hash::make('admin123'),
            'image' => $faker->imageUrl($width = 640, $height = 480),
            'role' => 'admin'
        ]);

        User::create([
            'name' => 'superadmin',
            'email' => 'superadmin@superadmin',
            'password' => Hash::make('superadmin123'),
            'image' => $faker->imageUrl($width = 640, $height = 480),
            'role' => 'super admin'
        ]);
    }
}
