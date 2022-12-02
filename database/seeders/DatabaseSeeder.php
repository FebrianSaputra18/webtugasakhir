<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
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
        $mockusers = [
            [
                'name' => 'admin',
                'phone_number' => '123',
                'role' => 1,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'sales',
                'phone_number' => '222',
                'role' => 2,
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'sales2',
                'phone_number' => '333',
                'role' => 2,
                'password' => Hash::make('password'),
            ],
            // [
            //     'name' => 'supplier',
            //     'phone_number' => '0812345678912',
            //     'role' => 3,
            //     'password' => Hash::make('password'),
            // ]
        ];
        foreach ($mockusers as $key => $value) {
            User::create($value);
        }
    }
}
