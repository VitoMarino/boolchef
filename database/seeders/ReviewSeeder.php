<?php

namespace Database\Seeders;

use App\Models\Chef;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Review;
use Faker\Generator as Faker;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $chefs = Chef::all()->pluck('id');
        $reviews =
        [
            [
                'review_title' => "Pizza Margherita da sogno!",
                'review' => "La pizza Margherita che ho mangiato qui è stata una vera rivelazione. L'impasto era leggero e ben cotto, e il pomodoro fresco era semplicemente delizioso. La consiglio a tutti!",
                'user_name' => "PizzaLover99",
                'email' => "pizzalover99@example.com",
            ],
            [
                'review_title' => "Risotto ai funghi perfetto",
                'review' => "Ho provato il risotto ai funghi e sono rimasto estasiato. Era cremoso, ricco di sapore e i funghi erano freschi e ben cotti. Un piatto che rifarei volentieri!",
                'user_name' => "RisottoFan88",
                'email' => "risottofan88@example.com",
            ],
            [
                'review_title' => "Gelato artigianale incredibile",
                'review' => "Il gelato artigianale di questo ristorante è il migliore che abbia mai assaggiato. I gusti erano intensi e ben bilanciati. Assolutamente da provare!",
                'user_name' => "GelatoGuru77",
                'email' => "gelatoguru77@example.com",
            ],
            [
                'review_title' => "Tacos di pesce freschi e gustosi",
                'review' => "I tacos di pesce erano freschissimi e pieni di sapore! La combinazione di ingredienti era perfetta e il tutto era servito con una salsa piccante deliziosa. Tornerò sicuramente!",
                'user_name' => "TacoLover22",
                'email' => "tacolover22@example.com",
            ],
            [
                'review_title' => "Pasta al pesto sublime",
                'review' => "La pasta al pesto che ho assaggiato qui era davvero sublime. Il pesto era fatto in casa e aveva un sapore fresco e aromatico. Un piatto che consiglio vivamente!",
                'user_name' => "PastaFan33",
                'email' => "pastafan33@example.com",
            ],
            [
                'review_title' => "Insalata di quinoa mediocre",
                'review' => "Ho provato l'insalata di quinoa e non era niente di speciale. Gli ingredienti sembravano freschi, ma il sapore era piuttosto blando. Mi aspettavo di più.",
                'user_name' => "HealthyEater44",
                'email' => "healthyeater44@example.com",
            ],
            [
                'review_title' => "Hamburger senza infamia e senza lode",
                'review' => "L'hamburger che ho ordinato era buono, ma non eccezionale. La carne era cotta bene, ma il panino e i condimenti non si abbinavano perfettamente. Un pasto mediocre.",
                'user_name' => "BurgerFan55",
                'email' => "burgerfan55@example.com",
            ],
            [
                'review_title' => "Sushi deludente",
                'review' => "Ho provato il sushi e sono rimasto molto deluso. Il pesce non era fresco come speravo e il riso era troppo appiccicoso. Non tornerò per questo piatto.",
                'user_name' => "SushiCritic11",
                'email' => "sushicritic11@example.com",
            ],
            [
                'review_title' => "Pollo alla griglia asciutto",
                'review' => "Il pollo alla griglia era asciutto e privo di sapore. Anche i contorni non erano all'altezza. È stata un'esperienza culinaria piuttosto negativa.",
                'user_name' => "ChickenDisappointed99",
                'email' => "chickendisappointed99@example.com",
            ],
            [
                'review_title' => "Tiramisù troppo dolce",
                'review' => "Il tiramisù era eccessivamente dolce e non equilibrato. La crema copriva completamente il sapore del caffè. Purtroppo, non lo consiglio.",
                'user_name' => "DessertHater77",
                'email' => "desserthater77@example.com",
            ],[
                'review_title' => "Pasta troppo al dente",
                'review' => "La pasta era troppo al dente per i miei gusti. Non sono riuscito a gustarla come avrei voluto.",
                'user_name' => "PastaCritic22",
                'email' => "pastacritic22@example.com",
            ],
            [
                'review_title' => "Pizza poco cotta",
                'review' => "La pizza sembrava poco cotta al centro. L'impasto non era ben lievitato e non si sentiva croccante.",
                'user_name' => "PizzaLover99",
                'email' => "pizzalover99@example.com",
            ],
            [
                'review_title' => "Servizio lento",
                'review' => "Il cibo era buono, ma il servizio era incredibilmente lento. Ho dovuto aspettare più di 30 minuti per il primo piatto.",
                'user_name' => "ImpatientDiner",
                'email' => "impatientdiner@example.com",
            ],
            [
                'review_title' => "Troppo piccante",
                'review' => "Il piatto era talmente piccante che non riuscivo a gustare i sapori. Sarebbe utile avere una scala di piccantezza.",
                'user_name' => "SpicyNoMore",
                'email' => "spicynomore@example.com",
            ],
            [
                'review_title' => "Porzioni piccole",
                'review' => "Le porzioni erano davvero piccole, considerando il prezzo pagato. Mi aspettavo di più dal piatto principale.",
                'user_name' => "SmallPlateCritic",
                'email' => "smallplatecritic@example.com",
            ],
            [
                'review_title' => "Bevanda calda servita fredda",
                'review' => "Il mio cappuccino è stato servito tiepido e non caldo come mi aspettavo. Ha perso tutta la sua cremosità.",
                'user_name' => "CoffeeLover101",
                'email' => "coffeelover101@example.com",
            ],
            [
                'review_title' => "Ottimo antipasto, pessimo dessert",
                'review' => "Gli antipasti erano eccellenti, ma il dessert era insoddisfacente. La torta sembrava vecchia e secca.",
                'user_name' => "DessertDisaster",
                'email' => "dessertdisaster@example.com",
            ],
            [
                'review_title' => "Cibo troppo salato",
                'review' => "Ho trovato il cibo eccessivamente salato, soprattutto i contorni. Non ho potuto finire il piatto.",
                'user_name' => "SaltyTaste",
                'email' => "saltytaste@example.com",
            ],
            [
                'review_title' => "Ottima presentazione, gusto mediocre",
                'review' => "La presentazione del piatto era meravigliosa, ma purtroppo il sapore non era all'altezza dell'estetica.",
                'user_name' => "VisualEater",
                'email' => "visualeater@example.com",
            ],
            [
                'review_title' => "Cibo freddo",
                'review' => "Il cibo mi è arrivato freddo e ho dovuto chiedere di riscaldarlo. Deludente.",
                'user_name' => "ColdPlate",
                'email' => "coldplate@example.com",
            ],
            [
                'review_title' => "Pasta insipida",
                'review' => "La pasta non aveva sapore, sembrava bollita in acqua senza sale. Un piatto senza personalità.",
                'user_name' => "FlavorSeeker",
                'email' => "flavorseeker@example.com",
            ],
            [
                'review_title' => "Troppo costoso per la qualità",
                'review' => "Il prezzo del pasto non giustificava la qualità del cibo. Mi aspettavo molto di più per il costo.",
                'user_name' => "BudgetGourmet",
                'email' => "budgetgourmet@example.com",
            ],
            [
                'review_title' => "Esperienza culinaria deludente",
                'review' => "L'esperienza culinaria nel complesso è stata deludente. Il servizio e il cibo non erano all'altezza.",
                'user_name' => "CriticalTaster",
                'email' => "criticaltaster@example.com",
            ],
            [
                'review_title' => "Cameriere poco attento",
                'review' => "Il cameriere sembrava disinteressato e non ci ha mai chiesto se avevamo bisogno di qualcosa.",
                'user_name' => "ServiceMatters",
                'email' => "servicematters@example.com",
            ],
            [
                'review_title' => "Dessert troppo piccolo",
                'review' => "Il dessert era buono, ma la porzione era così piccola che non valeva la pena ordinarlo.",
                'user_name' => "SweetTooth",
                'email' => "sweettooth@example.com",
            ],
            [
                'review_title' => "Pane raffermo",
                'review' => "Il pane servito al tavolo era raffermo e duro. Un vero peccato, dato che il resto del pasto era accettabile.",
                'user_name' => "BreadLover",
                'email' => "breadlover@example.com",
            ],
            [
                'review_title' => "Sapore artificiale",
                'review' => "Alcuni ingredienti avevano un sapore artificiale, come se fossero stati usati aromi non naturali.",
                'user_name' => "NaturalOnly",
                'email' => "naturalonly@example.com",
            ],
            [
                'review_title' => "Troppo tempo di attesa",
                'review' => "Abbiamo dovuto aspettare più di un'ora per il nostro cibo. Anche se il locale era pieno, il tempo di attesa era inaccettabile.",
                'user_name' => "HungryCustomer",
                'email' => "hungrycustomer@example.com",
            ],
            [
                'review_title' => "Porzione troppo grande",
                'review' => "La porzione era così grande che non sono riuscito a finirla. Sarebbe meglio avere porzioni più bilanciate.",
                'user_name' => "BigPlateBlues",
                'email' => "bigplateblues@example.com",
            ],
            [
                'review_title' => "Troppo unto",
                'review' => "Il piatto era troppo unto e pesante. Avrei preferito qualcosa di più leggero.",
                'user_name' => "LightEater",
                'email' => "lighteater@example.com",
            ],
            [
                'review_title' => "Cibo eccellente!",
                'review' => "Il cibo era assolutamente delizioso e ben presentato. Ogni piatto era un capolavoro.",
                'user_name' => "FoodLover123",
                'email' => "foodlover123@example.com",
            ],
            [
                'review_title' => "Servizio impeccabile",
                'review' => "Il personale è stato cordiale e molto attento. Mi sono sentito coccolato durante tutta la cena.",
                'user_name' => "HappyDiner88",
                'email' => "happydiner88@example.com",
            ],
            [
                'review_title' => "Esperienza indimenticabile",
                'review' => "Dall'antipasto al dessert, tutto era perfetto. Tornerò sicuramente!",
                'user_name' => "GourmetTraveler",
                'email' => "gourmettraveler@example.com",
            ],
            [
                'review_title' => "Ambiente fantastico",
                'review' => "Il locale è accogliente e l'atmosfera rilassante. Il cibo non delude mai.",
                'user_name' => "AmbienceLover",
                'email' => "ambiencelover@example.com",
            ],
            [
                'review_title' => "Pizza da sogno",
                'review' => "La pizza era cotta alla perfezione. Croccante fuori e morbida dentro. Ottimo lavoro!",
                'user_name' => "PizzaFanatic",
                'email' => "pizzafanatic@example.com",
            ],
            [
                'review_title' => "Sapori autentici",
                'review' => "Finalmente un ristorante che rispetta la tradizione italiana con ingredienti freschi e genuini.",
                'user_name' => "AuthenticEater",
                'email' => "authenticeater@example.com",
            ],
            [
                'review_title' => "Dessert paradisiaco",
                'review' => "Il tiramisù era il migliore che abbia mai mangiato. Leggero, cremoso e perfetto.",
                'user_name' => "SweetTooth",
                'email' => "sweettooth@example.com",
            ],
            [
                'review_title' => "Ottima scelta di vini",
                'review' => "La selezione di vini è ampia e ben curata. Ogni piatto aveva l'abbinamento perfetto.",
                'user_name' => "WineLover",
                'email' => "winelover@example.com",
            ],
            [
                'review_title' => "Prezzo giusto per la qualità",
                'review' => "Nonostante il livello alto del cibo e del servizio, i prezzi erano assolutamente onesti.",
                'user_name' => "BudgetGourmet",
                'email' => "budgetgourmet@example.com",
            ],
            [
                'review_title' => "Perfetto per una serata romantica",
                'review' => "Il posto ideale per una cena intima. L'atmosfera era magica e il cibo sublime.",
                'user_name' => "RomanticDiner",
                'email' => "romanticdiner@example.com",
            ],
            [
                'review_title' => "Piatti creativi e deliziosi",
                'review' => "Ogni piatto era unico e sorprendente. L'attenzione ai dettagli è incredibile.",
                'user_name' => "CreativeChefFan",
                'email' => "creativecheffan@example.com",
            ],
            [
                'review_title' => "Porzioni abbondanti",
                'review' => "Non solo il cibo era buonissimo, ma anche le porzioni erano generose. Ho dovuto portarmi a casa gli avanzi!",
                'user_name' => "FullBelly",
                'email' => "fullbelly@example.com",
            ],
            [
                'review_title' => "Locale moderno e accogliente",
                'review' => "Un perfetto mix tra modernità e tradizione. Il locale è arredato con gusto e il cibo è eccezionale.",
                'user_name' => "DesignLover",
                'email' => "designlover@example.com",
            ],
            [
                'review_title' => "Cucina genuina",
                'review' => "Ingredienti freschi e saporiti. La cucina tradizionale italiana eseguita alla perfezione.",
                'user_name' => "FreshFoodFan",
                'email' => "freshfoodfan@example.com",
            ],
            [
                'review_title' => "Servizio rapido e cortese",
                'review' => "Nonostante il locale fosse pieno, il servizio è stato veloce e professionale.",
                'user_name' => "FastService",
                'email' => "fastservice@example.com",
            ],
            [
                'review_title' => "Qualità costante",
                'review' => "Ogni volta che vengo qui, la qualità del cibo e del servizio è sempre la stessa: eccellente.",
                'user_name' => "RegularCustomer",
                'email' => "regularcustomer@example.com",
            ],
            [
                'review_title' => "Il miglior ristorante della città",
                'review' => "Senza dubbio uno dei migliori posti in cui abbia mai mangiato. Continuate così!",
                'user_name' => "TopDiner",
                'email' => "topdiner@example.com",
            ],
            [
                'review_title' => "Atmosfera rilassante",
                'review' => "Un ambiente tranquillo e confortevole, perfetto per godersi una cena in pace.",
                'user_name' => "ChillVibes",
                'email' => "chillvibes@example.com",
            ],
            [
                'review_title' => "Cibo che parla da sé",
                'review' => "Non ci sono parole per descrivere quanto era buono tutto. Complimenti allo chef!",
                'user_name' => "NoWords",
                'email' => "nowords@example.com",
            ],
            [
                'review_title' => "Tutto perfetto",
                'review' => "Dal servizio al cibo, tutto era perfetto. Non vedo l'ora di tornare.",
                'user_name' => "PerfectionSeeker",
                'email' => "perfectionseeker@example.com",
            ],
        ];

        $chefs = Chef::all()->pluck('id');
        foreach ($reviews as $review) {
            $review['chef_id'] = $faker->randomElement($chefs);
            Review::create($review);
        }
    }
}
