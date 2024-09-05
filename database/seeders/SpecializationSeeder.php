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
            ["name" => "Etiope"],
            ["name" => "Marocchina"],
            ["name" => "Americana"],
            ["name" => "Peruviana"],
            ["name" => "Filippina"],
            ["name" => "Russa"],
            ["name" => "Iraniana"],
            ["name" => "Israeliana"],
            ["name" => "Portoghese"],
            ["name" => "Tedesca"],
            ["name" => "Cajun"],
            ["name" => "Creola"],
            ["name" => "Cubana"],
            ["name" => "Argentina"],
            ["name" => "Australiana"],
            ["name" => "Sudafricana"],
            ["name" => "Caribica"],
            ["name" => "Nigeriana"],
            ["name" => "Siriana"],
            ["name" => "Afghana"],
            ["name" => "Polacca"],
            ["name" => "Ungherese"],
            ["name" => "Svedese"],
            ["name" => "Norvegese"],
            ["name" => "Danese"],
            ["name" => "Ceca"],
            ["name" => "Nepalese"],
            ["name" => "Malese"],
            ["name" => "Indonesiana"],
            ["name" => "Olandese"],
            ["name" => "Belga"],
            ["name" => "Salvadoregna"],
            ["name" => "Chilena"],
            ["name" => "Ecuadoriana"],
            ["name" => "Colombiana"],
            ["name" => "Honduregna"],
            ["name" => "Ghanese"],
            ["name" => "Somala"],
            ["name" => "Senegalese"],
            ["name" => "Mongola"],
            ["name" => "Singaporiana"],
            ["name" => "Kuwaitiana"],
            ["name" => "Tunisina"],
            ["name" => "Algerina"],
            ["name" => "Serba"],
            ["name" => "Croata"],
            ["name" => "Bosniaca"],
            ["name" => "Irlandese"],
            ["name" => "Scozzese"],
            ["name" => "Gallese"],
            ["name" => "Uzbeka"],
            ["name" => "Kazaka"],
            ["name" => "Georgiana"],
            ["name" => "Armena"],
            ["name" => "Birmana"],
            ["name" => "Cambogiana"],
            ["name" => "Yemenita"],
            ["name" => "Omanita"],
            ["name" => "Bhutanese"],
            ["name" => "Fijiana"],
            ["name" => "Hawaiana"],
            ["name" => "Malgascia"],
            ["name" => "Zambiana"],
            ["name" => "Papua Nuova Guineana"],
            ["name" => "Bielorussa"],
            ["name" => "Ucraina"],
            ["name" => "Macedone"],
            ["name" => "Albanese"],
            ["name" => "Bulgara"],
            ["name" => "Romena"],
            ["name" => "Sri Lankese"],
            ["name" => "Tibetan"],
            ["name" => "Pashtun"],
            ["name" => "Tatara"],
            ["name" => "Basca"],
            ["name" => "Bavarese"],
            ["name" => "Cantonese"],
            ["name" => "Sichuanese"],
            ["name" => "Uyghur"],
            ["name" => "Maghrebina"],
        ];

        foreach ($specializations as $specialization) {
            Specialization::create($specialization);
        }
    }
}
