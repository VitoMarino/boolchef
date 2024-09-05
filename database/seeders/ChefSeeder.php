<?php

namespace Database\Seeders;

use App\Models\Chef;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChefSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $chefs = [
            [
                'address' => "Via Esempio 123, Città Esempio",
                'CV' => "Curriculum Vitae di Chef Esempio: Laureato in Scienze Gastronomiche presso l'Università di Esempio, con 10 anni di esperienza nel campo della ristorazione. Ha lavorato presso rinomati ristoranti stellati e ha partecipato a numerosi concorsi culinari, vincendo diversi premi.",
                'photograph' => "link_fotografia_chef_esempio.jpg",
                'telephone' => "123-456-7890",
                'description_of_dishes' => "Specialità culinarie di Chef Esempio: piatti della tradizione rivisitati in chiave moderna, con particolare attenzione all'utilizzo di ingredienti freschi e di stagione. Ama sperimentare con sapori e tecniche innovative.",
                'visibility' => true
            ],
            [
                'address' => "Via Esempio 234, Città Esempio",
                'CV' => "Curriculum Vitae di Chef Esempio: Laureato in Scienze Gastronomiche presso l'Università di Esempio, con 10 anni di esperienza nel campo della ristorazione. Ha lavorato presso rinomati ristoranti stellati e ha partecipato a numerosi concorsi culinari, vincendo diversi premi.",
                'photograph' => "link_fotografia_chef_esempio.jpg",
                'telephone' => "33333333333",
                'description_of_dishes' => "Specialità culinarie di Chef Esempio: piatti della tradizione rivisitati in chiave moderna, con particolare attenzione all'utilizzo di ingredienti freschi e di stagione. Ama sperimentare con sapori e tecniche innovative.",
                'visibility' => true
            ],
            [
                'address' => "Via Esempio 1999002, Città Esempio",
                'CV' => "Curriculum Vitae di Chef Esempio: Laureato in Scienze Gastronomiche presso l'Università di Esempio, con 10 anni di esperienza nel campo della ristorazione. Ha lavorato presso rinomati ristoranti stellati e ha partecipato a numerosi concorsi culinari, vincendo diversi premi.",
                'photograph' => "link_fotografia_chef_esempio.jpg",
                'telephone' => "102927373738",
                'description_of_dishes' => "Specialità culinarie di Chef Esempio: piatti della tradizione rivisitati in chiave moderna, con particolare attenzione all'utilizzo di ingredienti freschi e di stagione. Ama sperimentare con sapori e tecniche innovative.",
                'visibility' => true
            ],
            [
                'address' => "Via Esempio 37373, Città Esempio",
                'CV' => "Curriculum Vitae di Chef Esempio: Laureato in Scienze Gastronomiche presso l'Università di Esempio, con 10 anni di esperienza nel campo della ristorazione. Ha lavorato presso rinomati ristoranti stellati e ha partecipato a numerosi concorsi culinari, vincendo diversi premi.",
                'photograph' => "link_fotografia_chef_esempio.jpg",
                'telephone' => "483737728218181",
                'description_of_dishes' => "Specialità culinarie di Chef Esempio: piatti della tradizione rivisitati in chiave moderna, con particolare attenzione all'utilizzo di ingredienti freschi e di stagione. Ama sperimentare con sapori e tecniche innovative.",
                'visibility' => true
            ],
            [
                'address' => "Via Esempio 16262, Città Esempio",
                'CV' => "Curriculum Vitae di Chef Esempio: Laureato in Scienze Gastronomiche presso l'Università di Esempio, con 10 anni di esperienza nel campo della ristorazione. Ha lavorato presso rinomati ristoranti stellati e ha partecipato a numerosi concorsi culinari, vincendo diversi premi.",
                'photograph' => "link_fotografia_chef_esempio.jpg",
                'telephone' => "365167179073",
                'description_of_dishes' => "Specialità culinarie di Chef Esempio: piatti della tradizione rivisitati in chiave moderna, con particolare attenzione all'utilizzo di ingredienti freschi e di stagione. Ama sperimentare con sapori e tecniche innovative.",
                'visibility' => true
            ],
            [
                'address' => "Via Esempio 278379, Città Esempio",
                'CV' => "Curriculum Vitae di Chef Esempio: Laureato in Scienze Gastronomiche presso l'Università di Esempio, con 10 anni di esperienza nel campo della ristorazione. Ha lavorato presso rinomati ristoranti stellati e ha partecipato a numerosi concorsi culinari, vincendo diversi premi.",
                'photograph' => "link_fotografia_chef_esempio.jpg",
                'telephone' => "1152683920",
                'description_of_dishes' => "Specialità culinarie di Chef Esempio: piatti della tradizione rivisitati in chiave moderna, con particolare attenzione all'utilizzo di ingredienti freschi e di stagione. Ama sperimentare con sapori e tecniche innovative.",
                'visibility' => true
            ],
            [
                'address' => "Via Esempio 18273903, Città Esempio",
                'CV' => "Curriculum Vitae di Chef Esempio: Laureato in Scienze Gastronomiche presso l'Università di Esempio, con 10 anni di esperienza nel campo della ristorazione. Ha lavorato presso rinomati ristoranti stellati e ha partecipato a numerosi concorsi culinari, vincendo diversi premi.",
                'photograph' => "link_fotografia_chef_esempio.jpg",
                'telephone' => "123-456-7890",
                'description_of_dishes' => "Specialità culinarie di Chef Esempio: piatti della tradizione rivisitati in chiave moderna, con particolare attenzione all'utilizzo di ingredienti freschi e di stagione. Ama sperimentare con sapori e tecniche innovative.",
                'visibility' => true
            ],
            [
                'address' => "Via Esempio 71627829, Città Esempio",
                'CV' => "Curriculum Vitae di Chef Esempio: Laureato in Scienze Gastronomiche presso l'Università di Esempio, con 10 anni di esperienza nel campo della ristorazione. Ha lavorato presso rinomati ristoranti stellati e ha partecipato a numerosi concorsi culinari, vincendo diversi premi.",
                'photograph' => "link_fotografia_chef_esempio.jpg",
                'telephone' => "6262782901028737",
                'description_of_dishes' => "Specialità culinarie di Chef Esempio: piatti della tradizione rivisitati in chiave moderna, con particolare attenzione all'utilizzo di ingredienti freschi e di stagione. Ama sperimentare con sapori e tecniche innovative.",
                'visibility' => true
            ],
            [
                'address' => "Via Esempio 018273, Città Esempio",
                'CV' => "Curriculum Vitae di Chef Esempio: Laureato in Scienze Gastronomiche presso l'Università di Esempio, con 10 anni di esperienza nel campo della ristorazione. Ha lavorato presso rinomati ristoranti stellati e ha partecipato a numerosi concorsi culinari, vincendo diversi premi.",
                'photograph' => "link_fotografia_chef_esempio.jpg",
                'telephone' => "27819199832",
                'description_of_dishes' => "Specialità culinarie di Chef Esempio: piatti della tradizione rivisitati in chiave moderna, con particolare attenzione all'utilizzo di ingredienti freschi e di stagione. Ama sperimentare con sapori e tecniche innovative.",
                'visibility' => true
            ],
            [
                'address' => "Via Esempio 102835, Città Esempio",
                'CV' => "Curriculum Vitae di Chef Esempio: Laureato in Scienze Gastronomiche presso l'Università di Esempio, con 10 anni di esperienza nel campo della ristorazione. Ha lavorato presso rinomati ristoranti stellati e ha partecipato a numerosi concorsi culinari, vincendo diversi premi.",
                'photograph' => "link_fotografia_chef_esempio.jpg",
                'telephone' => "383929101",
                'description_of_dishes' => "Specialità culinarie di Chef Esempio: piatti della tradizione rivisitati in chiave moderna, con particolare attenzione all'utilizzo di ingredienti freschi e di stagione. Ama sperimentare con sapori e tecniche innovative.",
                'visibility' => true
            ]

        ];

        foreach ($chefs as $chef) {
            $newChef = new Chef;
            $newChef->address = $chef['address'];
            $newChef->CV = $chef['CV'];
            $newChef->photograph = $chef['photograph'];
            $newChef->telephone = $chef['telephone'];
            $newChef->description_of_dishes = $chef['description_of_dishes'];
            $newChef->visibility = $chef[true];
        }
    }
}
