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
                'name' => 'Matteo',
                'lastname' => 'Rossi',
                'email' => 'matteo.rossi@example.com',
                'password' => '12345678',
            ],
            [
                'name' => 'Luca',
                'lastname' => 'Bianchi',
                'email' => 'luca.bianchi@example.com',
                'password' => 'abcdef12',
            ],
            [
                'name' => 'Giulia',
                'lastname' => 'Verdi',
                'email' => 'giulia.verdi@example.com',
                'password' => 'password99',
            ],
            [
                'name' => 'Andrea',
                'lastname' => 'Neri',
                'email' => 'andrea.neri@example.com',
                'password' => 'qwertyui',
            ],
            [
                'name' => 'Sara',
                'lastname' => 'Gialli',
                'email' => 'sara.gialli@example.com',
                'password' => 'mnbvcxz1',
            ],
            [
                'name' => 'Marco',
                'lastname' => 'Rossi',
                'email' => 'marco.rossi@example.com',
                'password' => 'poiuytrew',
            ],
            [
                'name' => 'Elena',
                'lastname' => 'Blu',
                'email' => 'elena.blu@example.com',
                'password' => 'zxcvbn12',
            ],
            [
                'name' => 'Davide',
                'lastname' => 'Marroni',
                'email' => 'davide.marroni@example.com',
                'password' => 'asdfghjk',
            ],
            [
                'name' => 'Francesca',
                'lastname' => 'Grigi',
                'email' => 'francesca.grigi@example.com',
                'password' => 'zxcvbn12',
            ],
            [
                'name' => 'Paolo',
                'lastname' => 'Azzurri',
                'email' => 'paolo.azzurri@example.com',
                'password' => 'ghijklmn',
            ],
        ];


        foreach($users as $user) {
            User::create($user);
        }
    }
}
