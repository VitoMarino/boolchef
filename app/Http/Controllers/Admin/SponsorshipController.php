<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Chef;
use App\Models\Sponsorship;
use Braintree\Gateway;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SponsorshipController extends Controller
{
    public function index(Gateway $gateway, Chef $chef)
    {
        $sponsorships = Sponsorship::all();


        $clientToken = $gateway->clientToken()->generate();


        $user = auth()->user();
        if (!$user) {

            return redirect()->route('login')->with('not-auth', "Devi aver effettutato l'accesso per visualizzare questa pagina.");
        }
        $chef = $user->chef;




        return view('admin.chefs.profile.sponsorship', compact('sponsorships', 'clientToken', 'chef'));
    }

    public function checkout(Request $request, Gateway $gateway, Chef $chef)
    {
        // Validazione dei dati ricevuti
        $request->validate([
            'sponsorship_id' => 'required|exists:sponsorships,id',
            'payment_method_nonce' => 'required',
        ]);

        // Recupera il pacchetto di sponsorizzazione selezionato
        $sponsorship = Sponsorship::findOrFail($request->sponsorship_id);

        // Importo da pagare
        $amount = $sponsorship->price;

        // Processa il pagamento con Braintree
        $result = $gateway->transaction()->sale([
            'amount' => $amount,
            'paymentMethodNonce' => $request->payment_method_nonce,
            'options' => [
                'submitForSettlement' => true,
            ],
        ]);

        if ($result->success) {
            // Pagamento riuscito

            // Recupera lo chef associato all'utente autenticato
            $user = auth()->user();

            // Assicurati che l'utente abbia un profilo chef
            if (!$user->chef) {
                return redirect()->route('sponsorships.index')->with('error', 'Non sei autorizzato a effettuare questa operazione.');
            }

            $chef = $user->chef;

            // Calcola le date di inizio e fine della sponsorizzazione
            $startDate = now();
            $endDate = $startDate->copy()->addHours($sponsorship->length);

            // Inserisci nuova sponsorizazzione o aggiorna vecchio
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
            // Reindirizza alla pagina di successo
            return redirect()->route('admin.chefs.show', $chef)->with('success-payment', 'Sponsorizzazione attivata con successo!');
        } else {
            // Pagamento fallito
            $user = auth()->user();

            if (!$user->chef) {
                return redirect()->route('sponsorships.index')->with('not-auth', 'Non sei autorizzato a effettuare questa operazione.');
            }

            $chef = $user->chef;

            return redirect()->route('admin.chefs.show', $chef)->with('error-payment', 'Pagamento non riuscito. Per favore riprova.');
        }
    }
}
