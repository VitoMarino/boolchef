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
                'address' => 'Via dei Mille 10, Milano',
                'email' => 'matteo.rossi@example.com',
                'password' => '12345678',
            ],
            [
                'name' => 'Luca',
                'lastname' => 'Bianchi',
                'address' => 'Via Roma 20, Torino',
                'email' => 'luca.bianchi@example.com',
                'password' => 'abcdef12',
            ],
            [
                'name' => 'Giulia',
                'lastname' => 'Verdi',
                'address' => 'Corso Venezia 15, Napoli',
                'email' => 'giulia.verdi@example.com',
                'password' => 'password99',
            ],
            [
                'name' => 'Andrea',
                'lastname' => 'Neri',
                'address' => 'Piazza della Libertà 5, Firenze',
                'email' => 'andrea.neri@example.com',
                'password' => 'qwertyui',
            ],
            [
                'name' => 'Sara',
                'lastname' => 'Gialli',
                'address' => 'Via della Pace 12, Roma',
                'email' => 'sara.gialli@example.com',
                'password' => 'mnbvcxz1',
            ],
            [
                'name' => 'Marco',
                'lastname' => 'Rossi',
                'address' => 'Viale dei Tigli 3, Bologna',
                'email' => 'marco.rossi@example.com',
                'password' => 'poiuytrew',
            ],
            [
                'name' => 'Elena',
                'lastname' => 'Blu',
                'address' => 'Via del Corso 8, Venezia',
                'email' => 'elena.blu@example.com',
                'password' => 'zxcvbn12',
            ],
            [
                'name' => 'Davide',
                'lastname' => 'Marroni',
                'address' => 'Piazza San Marco 2, Genova',
                'email' => 'davide.marroni@example.com',
                'password' => 'asdfghjk',
            ],
            [
                'name' => 'Francesca',
                'lastname' => 'Grigi',
                'address' => 'Via dei Santi 7, Palermo',
                'email' => 'francesca.grigi@example.com',
                'password' => 'zxcvbn12',
            ],
            [
                'name' => 'Paolo',
                'lastname' => 'Azzurri',
                'address' => 'Via Verdi 14, Bari',
                'email' => 'paolo.azzurri@example.com',
                'password' => 'ghijklmn',
            ],
        ];


        foreach($users as $user) {
            User::create($user);
        }
    }
}
