<?php

namespace Database\Seeders;

use App\Models\Chef;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ChefSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //
        $chefs =
        [
            [
                'address' => "Via Esempio 123, Città Esempio",
                'CV' => "Curriculum Vitae di Chef Esempio: Laureato in Scienze Gastronomiche presso l'Università di Esempio.",
                'photograph' => "link_fotografia_chef_esempio.jpg",
                'telephone' => "3456789012",
                'description_of_dishes' => "Specialità culinarie di Chef Esempio: piatti della tradizione rivisitati in chiave moderna, con particolare attenzione all'utilizzo di ingredienti freschi e di stagione. Ama sperimentare con sapori e tecniche innovative.",
                'visibility' => true
            ],
            [
                'address' => "Via Esempio 234, Città Esempio",
                'CV' => "Curriculum Vitae di Chef Esempio: Laureato in Scienze Gastronomiche presso l'Università di Esempio.",
                'photograph' => "link_fotografia_chef_esempio.jpg",
                'telephone' => "9876543210",
                'description_of_dishes' => "Specialità culinarie di Chef Esempio: piatti della tradizione rivisitati in chiave moderna, con particolare attenzione all'utilizzo di ingredienti freschi e di stagione. Ama sperimentare con sapori e tecniche innovative.",
                'visibility' => true
            ],
            [
                'address' => "Via Esempio 1999002, Città Esempio",
                'CV' => "Curriculum Vitae di Chef Esempio: Laureato in Scienze Gastronomiche presso l'Università di Esempio.",
                'photograph' => "link_fotografia_chef_esempio.jpg",
                'telephone' => "1234567890",
                'description_of_dishes' => "Specialità culinarie di Chef Esempio: piatti della tradizione rivisitati in chiave moderna, con particolare attenzione all'utilizzo di ingredienti freschi e di stagione. Ama sperimentare con sapori e tecniche innovative.",
                'visibility' => true
            ],
            [
                'address' => "Via Esempio 37373, Città Esempio",
                'CV' => "Curriculum Vitae di Chef Esempio: Laureato in Scienze Gastronomiche presso l'Università di Esempio.",
                'photograph' => "link_fotografia_chef_esempio.jpg",
                'telephone' => "2345678901",
                'description_of_dishes' => "Specialità culinarie di Chef Esempio: piatti della tradizione rivisitati in chiave moderna, con particolare attenzione all'utilizzo di ingredienti freschi e di stagione. Ama sperimentare con sapori e tecniche innovative.",
                'visibility' => true
            ],
            [
                'address' => "Via Esempio 16262, Città Esempio",
                'CV' => "Curriculum Vitae di Chef Esempio: Laureato in Scienze Gastronomiche presso l'Università di Esempio.",
                'photograph' => "link_fotografia_chef_esempio.jpg",
                'telephone' => "4567890123",
                'description_of_dishes' => "Specialità culinarie di Chef Esempio: piatti della tradizione rivisitati in chiave moderna, con particolare attenzione all'utilizzo di ingredienti freschi e di stagione. Ama sperimentare con sapori e tecniche innovative.",
                'visibility' => true
            ],
            [
                'address' => "Via Esempio 278379, Città Esempio",
                'CV' => "Curriculum Vitae di Chef Esempio: Laureato in Scienze Gastronomiche presso l'Università di Esempio.",
                'photograph' => "link_fotografia_chef_esempio.jpg",
                'telephone' => "5678901234",
                'description_of_dishes' => "Specialità culinarie di Chef Esempio: piatti della tradizione rivisitati in chiave moderna, con particolare attenzione all'utilizzo di ingredienti freschi e di stagione. Ama sperimentare con sapori e tecniche innovative.",
                'visibility' => true
            ],
            [
                'address' => "Via Esempio 18273903, Città Esempio",
                'CV' => "Curriculum Vitae di Chef Esempio: Laureato in Scienze Gastronomiche presso l'Università di Esempio.",
                'photograph' => "link_fotografia_chef_esempio.jpg",
                'telephone' => "6789012345",
                'description_of_dishes' => "Specialità culinarie di Chef Esempio: piatti della tradizione rivisitati in chiave moderna, con particolare attenzione all'utilizzo di ingredienti freschi e di stagione. Ama sperimentare con sapori e tecniche innovative.",
                'visibility' => true
            ],
            [
                'address' => "Via Esempio 71627829, Città Esempio",
                'CV' => "Curriculum Vitae di Chef Esempio: Laureato in Scienze Gastronomiche presso l'Università di Esempio.",
                'photograph' => "link_fotografia_chef_esempio.jpg",
                'telephone' => "7890123456",
                'description_of_dishes' => "Specialità culinarie di Chef Esempio: piatti della tradizione rivisitati in chiave moderna, con particolare attenzione all'utilizzo di ingredienti freschi e di stagione. Ama sperimentare con sapori e tecniche innovative.",
                'visibility' => true
            ],
            [
                'address' => "Via Esempio 018273, Città Esempio",
                'CV' => "Curriculum Vitae di Chef Esempio: Laureato in Scienze Gastronomiche presso l'Università di Esempio.",
                'photograph' => "link_fotografia_chef_esempio.jpg",
                'telephone' => "8901234567",
                'description_of_dishes' => "Specialità culinarie di Chef Esempio: piatti della tradizione rivisitati in chiave moderna, con particolare attenzione all'utilizzo di ingredienti freschi e di stagione. Ama sperimentare con sapori e tecniche innovative.",
                'visibility' => true
            ],
            [
                'address' => "Via Esempio 102835, Città Esempio",
                'CV' => "Curriculum Vitae di Chef Esempio: Laureato in Scienze Gastronomiche presso l'Università di Esempio.",
                'photograph' => "link_fotografia_chef_esempio.jpg",
                'telephone' => "0123456789",
                'description_of_dishes' => "Specialità culinarie di Chef Esempio: piatti della tradizione rivisitati in chiave moderna, con particolare attenzione all'utilizzo di ingredienti freschi e di stagione. Ama sperimentare con sapori e tecniche innovative.",
                'visibility' => true
            ],
            [
                'address' => "Via Piatti 12, Milano",
                'CV' => "Curriculum Vitae di Chef Giovanni Rossi: Esperto di cucina mediterranea, con 20 anni di esperienza nei ristoranti stellati.",
                'photograph' => "link_fotografia_chef_giovanni_rossi.jpg",
                'telephone' => "3456781234",
                'description_of_dishes' => "Specialità: piatti di pesce freschi, preparati con cura e ingredienti locali. Innovazione e tradizione sono il suo marchio di fabbrica.",
                'visibility' => true
            ],
            [
                'address' => "Piazza Verdi 45, Roma",
                'CV' => "Curriculum Vitae di Chef Alessandra Verdi: Chef di pasticceria con esperienza in Francia e Italia.",
                'photograph' => "link_fotografia_chef_alessandra_verdi.jpg",
                'telephone' => "3214567890",
                'description_of_dishes' => "Specialità: dessert raffinati con tecniche francesi e ingredienti locali italiani, come il tiramisù e la millefoglie.",
                'visibility' => true
            ],
            [
                'address' => "Corso Italia 110, Napoli",
                'CV' => "Curriculum Vitae di Chef Luca Bianchi: Specializzato nella cucina napoletana, famoso per le sue pizze e i suoi primi piatti.",
                'photograph' => "link_fotografia_chef_luca_bianchi.jpg",
                'telephone' => "3129876543",
                'description_of_dishes' => "Specialità: pizza napoletana verace cotta nel forno a legna, spaghetti alle vongole, e altri classici della cucina campana.",
                'visibility' => true
            ],
            [
                'address' => "Via del Mare 87, Genova",
                'CV' => "Curriculum Vitae di Chef Francesca Rossi: Maestra di cucina ligure, con un tocco innovativo nei piatti di pesce.",
                'photograph' => "link_fotografia_chef_francesca_rossi.jpg",
                'telephone' => "3345678910",
                'description_of_dishes' => "Specialità: pesce fresco del Mar Ligure, preparato con erbe aromatiche e verdure locali, come il pesto alla genovese.",
                'visibility' => true
            ],
            [
                'address' => "Viale Europa 22, Torino",
                'CV' => "Curriculum Vitae di Chef Marco Neri: Chef specializzato in cucina piemontese, con una passione per i tartufi e i piatti di carne.",
                'photograph' => "link_fotografia_chef_marco_neri.jpg",
                'telephone' => "3567890123",
                'description_of_dishes' => "Specialità: brasato al Barolo, risotto ai funghi porcini, e altre specialità della tradizione piemontese.",
                'visibility' => true
            ],
            [
                'address' => "Via del Sole 55, Firenze",
                'CV' => "Curriculum Vitae di Chef Sara Belli: Esperta di cucina toscana, con particolare attenzione alla cucina vegetariana e ai prodotti biologici.",
                'photograph' => "link_fotografia_chef_sara_belli.jpg",
                'telephone' => "3987654321",
                'description_of_dishes' => "Specialità: ribollita, pappa al pomodoro, e piatti a base di verdure fresche e locali, sempre con un tocco moderno.",
                'visibility' => true
            ],
            [
                'address' => "Via Roma 3, Venezia",
                'CV' => "Curriculum Vitae di Chef Giorgio Moretti: Maestro della cucina veneziana, con un'attenzione particolare ai piatti a base di pesce.",
                'photograph' => "link_fotografia_chef_giorgio_moretti.jpg",
                'telephone' => "3210987654",
                'description_of_dishes' => "Specialità: risotto al nero di seppia, baccalà mantecato, e altri classici della cucina lagunare.",
                'visibility' => true
            ],
            [
                'address' => "Via Manzoni 67, Palermo",
                'CV' => "Curriculum Vitae di Chef Claudia Gallo: Esperta di cucina siciliana, famosa per i suoi dolci e i piatti a base di pesce.",
                'photograph' => "link_fotografia_chef_claudia_gallo.jpg",
                'telephone' => "3109876543",
                'description_of_dishes' => "Specialità: cannoli siciliani, arancini, e piatti a base di pesce spada, preparati con ingredienti freschi del Mediterraneo.",
                'visibility' => true
            ],
            [
                'address' => "Via delle Alpi 12, Trento",
                'CV' => "Curriculum Vitae di Chef Alberto Greco: Specializzato in cucina montana, con un focus su piatti di selvaggina e formaggi locali.",
                'photograph' => "link_fotografia_chef_alberto_greco.jpg",
                'telephone' => "3678901234",
                'description_of_dishes' => "Specialità: polenta concia, spezzatino di cervo, e altri piatti tradizionali della cucina di montagna.",
                'visibility' => true
            ],
            [
                'address' => "Via Dante 88, Bologna",
                'CV' => "Curriculum Vitae di Chef Giulia Rossi: Maestra di cucina emiliana, famosa per la sua pasta fatta in casa.",
                'photograph' => "link_fotografia_chef_giulia_rossi.jpg",
                'telephone' => "3987653210",
                'description_of_dishes' => "Specialità: tortellini in brodo, lasagne alla bolognese, e tagliatelle al ragù, preparati con amore e cura.",
                'visibility' => true
            ],
            [
                'address' => "Via Verdi 101, Pisa",
                'CV' => "Curriculum Vitae di Chef Antonio Gatti: Esperto di cucina toscana, con un'attenzione particolare alla cucina casereccia.",
                'photograph' => "link_fotografia_chef_antonio_gatti.jpg",
                'telephone' => "3201234567",
                'description_of_dishes' => "Specialità: cacciucco alla livornese, panzanella, e altre specialità tipiche della costa toscana.",
                'visibility' => true
            ],
            [
                'address' => "Via Napoli 56, Bari",
                'CV' => "Curriculum Vitae di Chef Elena Bianchi: Esperta di cucina pugliese, con una grande passione per le orecchiette e i piatti di mare.",
                'photograph' => "link_fotografia_chef_elena_bianchi.jpg",
                'telephone' => "3119876543",
                'description_of_dishes' => "Specialità: orecchiette con le cime di rapa, cozze gratinate, e altri piatti tipici della cucina pugliese.",
                'visibility' => true
            ],
            [
                'address' => "Via dell'Olio 45, Siena",
                'CV' => "Curriculum Vitae di Chef Carlo Neri: Maestro di cucina toscana, con una passione per l'olio extravergine d'oliva e i piatti a base di carne.",
                'photograph' => "link_fotografia_chef_carlo_neri.jpg",
                'telephone' => "3567890987",
                'description_of_dishes' => "Specialità: bistecca alla fiorentina, pici al sugo di cinghiale, e altri piatti della tradizione toscana.",
                'visibility' => true
            ],
            [
                'address' => "Via del Pesce 9, Cagliari",
                'CV' => "Curriculum Vitae di Chef Silvia Mancini: Esperta di cucina sarda, con un focus sui piatti di mare e i dolci tradizionali.",
                'photograph' => "link_fotografia_chef_silvia_mancini.jpg",
                'telephone' => "3212345678",
                'description_of_dishes' => "Specialità: fregola con arselle, porceddu, e seadas, tutti preparati con ingredienti freschi e locali.",
                'visibility' => true
            ],
            [
                'address' => "Via Garibaldi 66, Modena",
                'CV' => "Curriculum Vitae di Chef Roberto Ferri: Maestro di cucina emiliana, con una passione per il balsamico e i salumi.",
                'photograph' => "link_fotografia_chef_roberto_ferri.jpg",
                'telephone' => "3909876543",
                'description_of_dishes' => "Specialità: gnocco fritto con salumi, tortelloni di zucca, e piatti a base di aceto balsamico tradizionale di Modena.",
                'visibility' => true
            ],
            [
                'address' => "Via delle Vigne 3, Udine",
                'CV' => "Curriculum Vitae di Chef Paolo Conti: Esperto di cucina friulana, con un focus sui piatti a base di carne e polenta.",
                'photograph' => "link_fotografia_chef_paolo_conti.jpg",
                'telephone' => "3456789123",
                'description_of_dishes' => "Specialità: frico con polenta, goulash, e altri piatti tradizionali della cucina friulana.",
                'visibility' => true
            ],
            [
                'address' => "Via della Costa 22, Amalfi",
                'CV' => "Curriculum Vitae di Chef Laura De Luca: Esperta di cucina campana, con un'attenzione particolare ai dolci e ai piatti a base di limone.",
                'photograph' => "link_fotografia_chef_laura_de_luca.jpg",
                'telephone' => "3212347654",
                'description_of_dishes' => "Specialità: scialatielli ai frutti di mare, torta caprese al limone, e altre specialità della Costiera Amalfitana.",
                'visibility' => true
            ],
            [
                'address' => "Via dell'Arte 88, Roma",
                'CV' => "Curriculum Vitae di Chef Matteo Ferrari: Chef di cucina romana, famoso per i suoi piatti tradizionali e il suo estro creativo.",
                'photograph' => "link_fotografia_chef_matteo_ferrari.jpg",
                'telephone' => "3112345678",
                'description_of_dishes' => "Specialità: carbonara, amatriciana, coda alla vaccinara, e altre specialità romane, con un tocco moderno.",
                'visibility' => true
            ],
            [
                'address' => "Via della Fontana 18, Perugia",
                'CV' => "Curriculum Vitae di Chef Simone Lippi: Maestro della cucina umbra, specializzato in piatti a base di tartufo.",
                'photograph' => "link_fotografia_chef_simone_lippi.jpg",
                'telephone' => "3567892345",
                'description_of_dishes' => "Specialità: strangozzi al tartufo nero, zuppa di lenticchie di Castelluccio, e altre prelibatezze umbre.",
                'visibility' => true
            ],
        ];
        $users = User::all()->pluck('id')->toArray();
        foreach ($chefs as $chef) {
            $userId = array_splice($users, array_rand($users), 1)[0];
            $chef['user_id'] = $userId;
            Chef::create($chef);
        }
    }
}
