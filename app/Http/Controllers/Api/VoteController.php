<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreVoteRequest;
use App\Models\Chef;
use App\Models\Vote;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    public function index(){
        //RITORNA UN JSON CON X COSE
        $votes = Vote::with('chefs')->get();
        return response()->json(
            [
                "success" => true,
                "results" => $votes
            ]);
    }

    public function show(Vote $vote){
        $vote->loadMissing('chefs');
        return response()->json(
            [
                "success" => true,
                "results" => $vote
            ]);
    }

    public function store(StoreVoteRequest $request){
        $data = $request->validated();

        $chef = Chef::find($data['chef_id']);

        if (!$chef) {
            return response()->json([
                "success" => false,
                "message" => "Voto non trovato"
            ], 404);
        }

        $chef->votes()->syncWithoutDetaching([$data['vote_id']]);
        $chef = Chef::with('votes')->find($chef->id);

        return response()->json([
            "success" => true,
            "results" => $chef
        ]);
    }
}
