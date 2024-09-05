<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\sponsorship;

class SponsorshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $SponsorshipsData = [
            [

                "name" => "Base",

                "price" => 2.99,
                "length" => 24
            ],
            [
                "name" => "Premium",
                "price" => 5.99,
                "length" => 72
            ],
            [
                "name" => "Ultimate",
                "price" => 9.99,
                "length" => 144
            ]


        ];

        foreach ($SponsorshipsData as $SponsorshipData) {
            $Sponsorship = new sponsorship();
            $Sponsorship->name = $SponsorshipData["name"];
            $Sponsorship->price = $SponsorshipData["price"];
            $Sponsorship->length = $SponsorshipData["length"];
            $Sponsorship->save();
        }
    }
}
