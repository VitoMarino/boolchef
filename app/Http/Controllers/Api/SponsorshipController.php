<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Chef;
use App\Models\Sponsorship;
use Illuminate\Http\Request;

class SponsorshipController extends Controller
{
    public function index()
    {
        // Recupera i chef che hanno almeno una sponsorizzazione e ordina per sponsorships.id in modo decrescente
        $chefs = Chef::with('user', 'sponsorships', 'specializations', 'votes', 'reviews')
            ->whereHas('sponsorships') // Filtra i chef con almeno una sponsorizzazione
            ->leftJoin('chef_sponsorship', 'chefs.id', '=', 'chef_sponsorship.chef_id') // Join con la tabella pivot
            ->leftJoin('sponsorships', 'chef_sponsorship.sponsorship_id', '=', 'sponsorships.id') // Join con la tabella delle sponsorizzazioni
            ->orderBy('sponsorships.id', 'desc') // Ordina per sponsorships.id in modo decrescente
            ->select('chefs.*') // Seleziona i campi del modello Chef per evitare conflitti
            ->get();

        return response()->json([
            "success" => true,
            "results" => $chefs
        ]);
    }
}
