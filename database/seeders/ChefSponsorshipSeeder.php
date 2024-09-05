<?php

namespace Database\Seeders;

use App\Models\Chef;
use App\Models\Sponsorship;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class ChefSponsorshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //chef
        $chefs = Chef::all();
        $sponsorship = Sponsorship::all()->pluck('id');
        foreach ($chefs as $chef) {
            //sponsorship
            $chef->sponsorships()->sync($faker->randomElements($sponsorship, rand(0 , 2)));
        }
    }
}
