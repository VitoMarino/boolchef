<?php

namespace Database\Seeders;

use App\Models\Vote;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $votesData = [
            [
                "Vote" => 1,
                "label" => "Sconsigliato",

            ],
            [
                "Vote" => 2,
                "label" => "Ko insufficente",

            ],
            [
                "Vote" => 3,
                "label" => "Gravemente insufficente",

            ],
            [
                "Vote" => 4,
                "label" => "Sconsigliato",

            ],
            [
                "Vote" => 5,
                "label" => "Non sufficente",

            ],
            [
                "Vote" => 6,
                "label" => "Sufficente",

            ],
            [
                "Vote" => 7,
                "label" => "Buono",

            ],
            [
                "Vote" => 8,
                "label" => "Consigliato",

            ],
            [
                "Vote" => 9,
                "label" => "Super Consigliato",

            ],
            [
                "Vote" => 10,
                "label" => "Eccellente",
            ],

        ];
        foreach ($votesData as $voteData) {
            Vote::create($voteData);
        }
    }
}
