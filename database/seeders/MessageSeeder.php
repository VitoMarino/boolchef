<?php

namespace Database\Seeders;

use App\Models\Chef;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Message;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $chefs = Chef::all()->pluck('id');
        $messages =
        [
            [
                "text_mes" => "Ciao, vorrei sapere se è possibile avere un menu vegetariano per il mio evento. Grazie!",
                "email_customer" => "giulia.rossi91@gmail.com"
            ],
            [
                "text_mes" => "Salve, potrei avere una proposta di menu senza glutine per il prossimo weekend?",
                "email_customer" => "andrea.bianchi83@yahoo.it"
            ],
            [
                "text_mes" => "Buongiorno, vorrei organizzare una cena a tema mediterraneo. Quali opzioni avete?",
                "email_customer" => "marta.verdi@hotmail.com"
            ],
            [
                "text_mes" => "Ciao, mi servirebbe un menu con piatti vegani per una festa di compleanno. È fattibile?",
                "email_customer" => "lucia.mancini@libero.it"
            ],
            [
                "text_mes" => "Salve, vorrei un preventivo per un catering di pesce per circa 20 persone.",
                "email_customer" => "federico.lombardi@gmail.com"
            ],
            [
                "text_mes" => "Buongiorno, potete offrire un'opzione senza latticini per il mio matrimonio?",
                "email_customer" => "alessia.marini89@outlook.com"
            ],
            [
                "text_mes" => "Salve, sto cercando un cuoco per una cena intima con piatti della cucina italiana.",
                "email_customer" => "marco.ferrari76@gmail.com"
            ],
            [
                "text_mes" => "Ciao, possiamo organizzare un menu speciale con ingredienti di stagione?",
                "email_customer" => "valentina.romano@mail.com"
            ],
            [
                "text_mes" => "Vorrei sapere se potete fornire un catering con piatti esclusivamente bio.",
                "email_customer" => "simone.galli92@alice.it"
            ],
            [
                "text_mes" => "Sto cercando un menu gourmet per una cena di lavoro. Avete suggerimenti?",
                "email_customer" => "chiara.naldi@virgilio.it"
            ],
            [
                "text_mes" => "Salve, potreste organizzare un brunch con piatti internazionali?",
                "email_customer" => "mattia.fontana84@tiscali.it"
            ],
            [
                "text_mes" => "Buongiorno, mi piacerebbe avere un preventivo per un evento con tapas spagnole.",
                "email_customer" => "elisabetta.conti@fastwebnet.it"
            ],
            [
                "text_mes" => "Ciao, potete preparare un menu con piatti tipici della cucina giapponese?",
                "email_customer" => "francesco.costa82@gmail.com"
            ],
            [
                "text_mes" => "Salve, vorrei sapere se potete cucinare per una cena a base di carne alla griglia.",
                "email_customer" => "serena.martini@libero.it"
            ],
            [
                "text_mes" => "Buongiorno, offrite servizi di catering per una festa all'aperto?",
                "email_customer" => "davide.sartori90@gmail.com"
            ],
            [
                "text_mes" => "Salve, potrei avere un menu tradizionale con prodotti locali?",
                "email_customer" => "margherita.milani@outlook.it"
            ],
            [
                "text_mes" => "Ciao, vorrei organizzare una serata con cucina fusion per circa 15 persone.",
                "email_customer" => "gabriele.vitali@gmail.com"
            ],
            [
                "text_mes" => "Salve, potete fornire piatti senza zucchero aggiunto per un evento di famiglia?",
                "email_customer" => "martina.guerra@mail.com"
            ],
            [
                "text_mes" => "Buongiorno, potete proporre un menu per una festa di laurea con piatti leggeri?",
                "email_customer" => "alberto.moro91@libero.it"
            ],
            [
                "text_mes" => "Salve, vorrei un catering per una cena a base di pesce crudo. Avete opzioni disponibili?",
                "email_customer" => "sara.caruso87@fastwebnet.it"
            ]
        ];

        foreach ($messages as $messageData) {
            $newMessageData = new Message();
            $newMessageData->chef_id = $chefs;
            $newMessageData->text_mes = $messageData['text_mes'];
            $newMessageData->email_customer = $messageData['email_customer'];
            $newMessageData->save();
        }
    }
}
