<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name'=> 'Matteo',
                'lastname'=> 'Rossi',
                'address'=> 'Via dei Mille 10, Milano',
                'email'=> 'matteo.rossi@example.com',
                'password'=> '12345678'
            ]
        ];

        foreach($users as $user) {
            User::create($user);
        }
    }
}
