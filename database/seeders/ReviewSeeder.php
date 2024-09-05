<?php

namespace Database\Seeders;

use App\Models\Chef;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Review;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
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
            ]
        ];

        foreach ($reviews as $review) {
            $newReview = new Review();
            $newReview->chef_id = $chefs;
            $newReview->review_title = $review['review_title'];
            $newReview->review = $review['review'];
            $newReview->user_name = $review['user_name'];
            $newReview->email = $review['email'];
            $newReview->save();
        }
    }
}
