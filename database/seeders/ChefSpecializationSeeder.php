<?php

namespace Database\Seeders;

use App\Models\Chef;
use App\Models\Specialization;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ChefSpecializationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //chef
        $chefs = Chef::all();
        $specializations = Specialization::all()->pluck('id');
        foreach ($chefs as $chef) {
            //specializazzioni
            $chef->specializations()->sync($faker->randomElements($specializations, rand(1 , 3)));
        }
    }
}
