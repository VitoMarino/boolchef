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
        $VotesData = [
            [
                "Vote" => 7,
                "Label" => "Sopra la media"

            ],
            [
                "Vote" => 6,
                "Label" => "Nella media"

            ],
            [
                "Vote" => 8,
                "Label" => "Ottimo"

            ],
            [
                "Vote" => 5,
                "Label" => "Sotto la media"

            ],
            [
                "Vote" => 10,
                "Label" => "Uno dei migliori chef!!!!!"

            ],
            [
                "Vote" => 2,
                "Label" => "Sconsigliato"

            ],
            [
                "Vote" => 9,
                "Label" => "Ottimo"

            ],
            [
                "Vote" => 5,
                "Label" => "nella media"

            ],
            [
                "Vote" => 7,
                "Label" => "Sopra la media"

            ],
            [
                "Vote" => 1,
                "Label" => "Sconsigliato"

            ],

        ];
        foreach ($VotesData as $VoteData) {
            $Vote = new Vote();
            $Vote->Vote = $VoteData["Vote"];
            $Vote->Label = $VoteData["Label"];
            $Vote->save();
        }
    }
}
