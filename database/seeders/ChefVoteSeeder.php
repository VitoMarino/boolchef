<?php

namespace Database\Seeders;

use App\Models\Chef;
use App\Models\Vote;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ChefVoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $chefs = Chef::all();
        $vote = Vote::all()->pluck("id");
        foreach ($chefs as $chef) {

            $chef->votes()->attach($faker->randomElements($vote, rand(1 , 10)));
        }
    }
}
