<?php

namespace Database\Seeders;

use App\Models\Specialization;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpecializationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $specializations = [
            ["name" => "Italiana"],
            ["name" => "Cinese"],
            ["name" => "Giapponese"],
            ["name" => "Indiana"],
            ["name" => "Messicana"],
            ["name" => "Francese"],
            ["name" => "Tailandese"],
            ["name" => "Spagnola"],
            ["name" => "Greca"],
            ["name" => "Turca"],
            ["name" => "Libanese"],
            ["name" => "Vietnamita"],
            ["name" => "Coreana"],
            ["name" => "Brasiliana"],
            ["name" => "Marocchina"],
            ["name" => "Americana"],
            ["name" => "Peruviana"],
            ["name" => "Filippina"],
            ["name" => "Russa"],
            ["name" => "Portoghese"],
            ["name" => "Tedesca"],
            ["name" => "Cubana"],
            ["name" => "Argentina"],
            ["name" => "Australiana"],
            ["name" => "Svedese"],
            ["name" => "Norvegese"],
            ["name" => "Indonesiana"],
            ["name" => "Olandese"],
            ["name" => "Ecuadoriana"],
            ["name" => "Colombiana"],
            ["name" => "Mongola"],
            ["name" => "Tunisina"],
            ["name" => "Algerina"],
            ["name" => "Hawaiana"],
            ["name" => "Albanese"],
            ["name" => "Bulgara"],
            ["name" => "Romena"],
        ];

        foreach ($specializations as $specialization) {
            Specialization::create($specialization);
        }
    }
}
