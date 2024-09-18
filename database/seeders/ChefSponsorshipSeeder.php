<?php

namespace Database\Seeders;

use App\Models\Chef;
use App\Models\Sponsorship;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

class ChefSponsorshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //chef
        $chefs = Chef::all();
        $sponsorships = Sponsorship::all();

    foreach ($chefs as $chef) {
        // Seleziona sponsorizzazioni casuali per lo chef
        $selectedSponsorships = $faker->randomElements($sponsorships, rand(0, 1));

        foreach ($selectedSponsorships as $sponsorship) {
            // Calcola le date
            $startDate = now();
            $endDate = $startDate->copy()->addHours($sponsorship->length);

            // Usa updateOrInsert per evitare duplicati e aggiornare i campi aggiuntivi
            DB::table('chef_sponsorship')->updateOrInsert(
                [
                    'chef_id' => $chef->id,
                    'sponsorship_id' => $sponsorship->id,
                ],
                [
                    'start_date' => $startDate,
                    'end_date' => $endDate,
                    'updated_at' => now(),
                ]
            );
        }
    }
    }
}
