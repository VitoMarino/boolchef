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
            [
                'name' => 'Giovanni',
                'lastname' => 'Bianchi',
                'email' => 'giovanni.bianchi@example.com',
                'password' => 'bianchi456',
            ],
            [
                'name' => 'Luisa',
                'lastname' => 'Verdi',
                'email' => 'luisa.verdi@example.com',
                'password' => 'verde789',
            ],
            [
                'name' => 'Marco',
                'lastname' => 'Neri',
                'email' => 'marco.neri@example.com',
                'password' => 'nerim123',
            ],
            [
                'name' => 'Francesca',
                'lastname' => 'Gialli',
                'email' => 'francesca.gialli@example.com',
                'password' => 'gialli987',
            ],
            [
                'name' => 'Luca',
                'lastname' => 'Blu',
                'email' => 'luca.blu@example.com',
                'password' => 'bluluca456',
            ],
            [
                'name' => 'Elena',
                'lastname' => 'Ferri',
                'email' => 'elena.ferri@example.com',
                'password' => 'ferrielena123',
            ],
            [
                'name' => 'Riccardo',
                'lastname' => 'Marini',
                'email' => 'riccardo.marini@example.com',
                'password' => 'marini456',
            ],
            [
                'name' => 'Giulia',
                'lastname' => 'Turchi',
                'email' => 'giulia.turchi@example.com',
                'password' => 'turchi789',
            ],
            [
                'name' => 'Andrea',
                'lastname' => 'Sorrentino',
                'email' => 'andrea.sorrentino@example.com',
                'password' => 'sorrentino123',
            ],
            [
                'name' => 'Chiara',
                'lastname' => 'Moretti',
                'email' => 'chiara.moretti@example.com',
                'password' => 'moretti456',
            ],
            [
                'name' => 'Davide',
                'lastname' => 'Esposito',
                'email' => 'davide.esposito@example.com',
                'password' => 'esposito789',
            ],
            [
                'name' => 'Martina',
                'lastname' => 'De Luca',
                'email' => 'martina.deluca@example.com',
                'password' => 'delucamartina123',
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Rinaldi',
                'email' => 'fabio.rinaldi@example.com',
                'password' => 'rinaldifabio456',
            ],
            [
                'name' => 'Sara',
                'lastname' => 'Costantini',
                'email' => 'sara.costantini@example.com',
                'password' => 'costantinisara789',
            ],
            [
                'name' => 'Vittoria',
                'lastname' => 'Giuliani',
                'email' => 'vittoria.giuliani@example.com',
                'password' => 'giulianivittoria123',
            ],
            [
                'name' => 'Alessandro',
                'lastname' => 'Leone',
                'email' => 'alessandro.leone@example.com',
                'password' => 'leonealessandro456',
            ],
            [
                'name' => 'Silvia',
                'lastname' => 'Russo',
                'email' => 'silvia.russo@example.com',
                'password' => 'russosilvia789',
            ],
            [
                'name' => 'Nicola',
                'lastname' => 'Vitale',
                'email' => 'nicola.vitale@example.com',
                'password' => 'vitalenicola123',
            ],
            [
                'name' => 'Pasquale',
                'lastname' => 'Laterano',
                'email' => 'pasquale.laterano@example.com',
                'password' => 'pasquale1234',
            ]
        ];


        foreach($users as $user) {
            User::create($user);
        }
    }
}
