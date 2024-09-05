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
        $chefs =
        [
            [
                'address' => "Via Esempio 123, Città Esempio",
                'CV' => "Curriculum Vitae di Chef Esempio: Laureato in Scienze Gastronomiche presso l'Università di Esempio.",
                'photograph' => "link_fotografia_chef_esempio.jpg",
                'telephone' => "3456789012",
                'description_of_dishes' => "Specialità culinarie di Chef Esempio: piatti della tradizione rivisitati in chiave moderna, con particolare attenzione all'utilizzo di ingredienti freschi e di stagione. Ama sperimentare con sapori e tecniche innovative.",
                'visibility' => true
            ],
            [
                'address' => "Via Esempio 234, Città Esempio",
                'CV' => "Curriculum Vitae di Chef Esempio: Laureato in Scienze Gastronomiche presso l'Università di Esempio.",
                'photograph' => "link_fotografia_chef_esempio.jpg",
                'telephone' => "9876543210",
                'description_of_dishes' => "Specialità culinarie di Chef Esempio: piatti della tradizione rivisitati in chiave moderna, con particolare attenzione all'utilizzo di ingredienti freschi e di stagione. Ama sperimentare con sapori e tecniche innovative.",
                'visibility' => true
            ],
            [
                'address' => "Via Esempio 1999002, Città Esempio",
                'CV' => "Curriculum Vitae di Chef Esempio: Laureato in Scienze Gastronomiche presso l'Università di Esempio.",
                'photograph' => "link_fotografia_chef_esempio.jpg",
                'telephone' => "1234567890",
                'description_of_dishes' => "Specialità culinarie di Chef Esempio: piatti della tradizione rivisitati in chiave moderna, con particolare attenzione all'utilizzo di ingredienti freschi e di stagione. Ama sperimentare con sapori e tecniche innovative.",
                'visibility' => true
            ],
            [
                'address' => "Via Esempio 37373, Città Esempio",
                'CV' => "Curriculum Vitae di Chef Esempio: Laureato in Scienze Gastronomiche presso l'Università di Esempio.",
                'photograph' => "link_fotografia_chef_esempio.jpg",
                'telephone' => "2345678901",
                'description_of_dishes' => "Specialità culinarie di Chef Esempio: piatti della tradizione rivisitati in chiave moderna, con particolare attenzione all'utilizzo di ingredienti freschi e di stagione. Ama sperimentare con sapori e tecniche innovative.",
                'visibility' => true
            ],
            [
                'address' => "Via Esempio 16262, Città Esempio",
                'CV' => "Curriculum Vitae di Chef Esempio: Laureato in Scienze Gastronomiche presso l'Università di Esempio.",
                'photograph' => "link_fotografia_chef_esempio.jpg",
                'telephone' => "4567890123",
                'description_of_dishes' => "Specialità culinarie di Chef Esempio: piatti della tradizione rivisitati in chiave moderna, con particolare attenzione all'utilizzo di ingredienti freschi e di stagione. Ama sperimentare con sapori e tecniche innovative.",
                'visibility' => true
            ],
            [
                'address' => "Via Esempio 278379, Città Esempio",
                'CV' => "Curriculum Vitae di Chef Esempio: Laureato in Scienze Gastronomiche presso l'Università di Esempio.",
                'photograph' => "link_fotografia_chef_esempio.jpg",
                'telephone' => "5678901234",
                'description_of_dishes' => "Specialità culinarie di Chef Esempio: piatti della tradizione rivisitati in chiave moderna, con particolare attenzione all'utilizzo di ingredienti freschi e di stagione. Ama sperimentare con sapori e tecniche innovative.",
                'visibility' => true
            ],
            [
                'address' => "Via Esempio 18273903, Città Esempio",
                'CV' => "Curriculum Vitae di Chef Esempio: Laureato in Scienze Gastronomiche presso l'Università di Esempio.",
                'photograph' => "link_fotografia_chef_esempio.jpg",
                'telephone' => "6789012345",
                'description_of_dishes' => "Specialità culinarie di Chef Esempio: piatti della tradizione rivisitati in chiave moderna, con particolare attenzione all'utilizzo di ingredienti freschi e di stagione. Ama sperimentare con sapori e tecniche innovative.",
                'visibility' => true
            ],
            [
                'address' => "Via Esempio 71627829, Città Esempio",
                'CV' => "Curriculum Vitae di Chef Esempio: Laureato in Scienze Gastronomiche presso l'Università di Esempio.",
                'photograph' => "link_fotografia_chef_esempio.jpg",
                'telephone' => "7890123456",
                'description_of_dishes' => "Specialità culinarie di Chef Esempio: piatti della tradizione rivisitati in chiave moderna, con particolare attenzione all'utilizzo di ingredienti freschi e di stagione. Ama sperimentare con sapori e tecniche innovative.",
                'visibility' => true
            ],
            [
                'address' => "Via Esempio 018273, Città Esempio",
                'CV' => "Curriculum Vitae di Chef Esempio: Laureato in Scienze Gastronomiche presso l'Università di Esempio.",
                'photograph' => "link_fotografia_chef_esempio.jpg",
                'telephone' => "8901234567",
                'description_of_dishes' => "Specialità culinarie di Chef Esempio: piatti della tradizione rivisitati in chiave moderna, con particolare attenzione all'utilizzo di ingredienti freschi e di stagione. Ama sperimentare con sapori e tecniche innovative.",
                'visibility' => true
            ],
            [
                'address' => "Via Esempio 102835, Città Esempio",
                'CV' => "Curriculum Vitae di Chef Esempio: Laureato in Scienze Gastronomiche presso l'Università di Esempio.",
                'photograph' => "link_fotografia_chef_esempio.jpg",
                'telephone' => "0123456789",
                'description_of_dishes' => "Specialità culinarie di Chef Esempio: piatti della tradizione rivisitati in chiave moderna, con particolare attenzione all'utilizzo di ingredienti freschi e di stagione. Ama sperimentare con sapori e tecniche innovative.",
                'visibility' => true
            ]
        ];

        foreach ($chefs as $chef) {
            Chef::create($chef);
        }
    }
}
