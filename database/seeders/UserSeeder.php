<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'IRAKOZE Bella',
                'email' => 'internoffice@fmorwanda.org',
                'password' => Hash::make('Mvtc@2024Intake'),
            ],
            [
                'name' => 'NSABIMANA Isaie',
                'email' => 'registration@fmorwanda.org',
                'password' => Hash::make('Mvtc@2024Intake'),
            ],

        ];
        User::insert($users);
    }
}
