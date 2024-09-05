<?php

namespace Database\Seeders;

use App\Models\Sponsorship;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class SponsorshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sponsorshipsData = [
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

        foreach ($sponsorshipsData as $sponsorshipData) {
            Sponsorship::create($sponsorshipData);
        }
    }
}
