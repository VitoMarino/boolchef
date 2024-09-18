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
            ],
            [
                'name' => 'Simone',
                'lastname' => 'Romani',
                'email' => 'simone.romani@example.com',
                'password' => 'romani1234',
            ],
            [
                'name' => 'Alessia',
                'lastname' => 'Serra',
                'email' => 'alessia.serra@example.com',
                'password' => 'serraalessia456',
            ],
            [
                'name' => 'Claudio',
                'lastname' => 'Fontana',
                'email' => 'claudio.fontana@example.com',
                'password' => 'fontanaclaudio789',
            ],
            [
                'name' => 'Franco',
                'lastname' => 'Gallo',
                'email' => 'franco.gallo@example.com',
                'password' => 'gallofranco123',
            ],
            [
                'name' => 'Marta',
                'lastname' => 'Santi',
                'email' => 'marta.santi@example.com',
                'password' => 'santimarta456',
            ],
            [
                'name' => 'Federica',
                'lastname' => 'Monti',
                'email' => 'federica.monti@example.com',
                'password' => 'montifederica789',
            ],
            [
                'name' => 'Edoardo',
                'lastname' => 'Riva',
                'email' => 'edoardo.riva@example.com',
                'password' => 'rivaedoardo123',
            ],
            [
                'name' => 'Gianni',
                'lastname' => 'Pellegrini',
                'email' => 'gianni.pellegrini@example.com',
                'password' => 'pellegrinigianni456',
            ],
            [
                'name' => 'Valeria',
                'lastname' => 'Gentile',
                'email' => 'valeria.gentile@example.com',
                'password' => 'gentilevaleria789',
            ],
            [
                'name' => 'Roberto',
                'lastname' => 'Fabbri',
                'email' => 'roberto.fabbri@example.com',
                'password' => 'fabbrifabbro123',
            ],
            [
                'name' => 'Lorenzo',
                'lastname' => 'Greco',
                'email' => 'lorenzo.greco@example.com',
                'password' => 'grecolorenzo456',
            ],
            [
                'name' => 'Irene',
                'lastname' => 'Piazza',
                'email' => 'irene.piazza@example.com',
                'password' => 'piazzairene789',
            ],
            [
                'name' => 'Giorgio',
                'lastname' => 'Ferrara',
                'email' => 'giorgio.ferrara@example.com',
                'password' => 'ferraragiorgio123',
            ],
            [
                'name' => 'Michela',
                'lastname' => 'Lombardi',
                'email' => 'michela.lombardi@example.com',
                'password' => 'lombardimichela456',
            ],
            [
                'name' => 'Gabriele',
                'lastname' => 'Barone',
                'email' => 'gabriele.barone@example.com',
                'password' => 'baronegabriele789',
            ],
            [
                'name' => 'Chiara',
                'lastname' => 'D’Amico',
                'email' => 'chiara.damico@example.com',
                'password' => 'damicochiara123',
            ],
            [
                'name' => 'Tommaso',
                'lastname' => 'Pace',
                'email' => 'tommaso.pace@example.com',
                'password' => 'pacetommaso456',
            ],
            [
                'name' => 'Eleonora',
                'lastname' => 'Vinci',
                'email' => 'eleonora.vinci@example.com',
                'password' => 'vincieleonora789',
            ],
            [
                'name' => 'Nicola',
                'lastname' => 'De Santis',
                'email' => 'nicola.desantis@example.com',
                'password' => 'desantisnicola123',
            ],
            [
                'name' => 'Alice',
                'lastname' => 'Bianco',
                'email' => 'alice.bianco@example.com',
                'password' => 'biancoalice456',
            ]
        ];


        foreach($users as $user) {
            User::create($user);
        }
    }
}
