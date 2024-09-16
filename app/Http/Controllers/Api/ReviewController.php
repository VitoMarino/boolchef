<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMessageRequest;
use App\Models\Message;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index(){
        //RITORNA UN JSON CON X COSE
        $votes = Review::with('chefs')->get();
        return response()->json(
            [
                "success" => true,
                "results" => $votes
            ]);
    }

    public function store(StoreMessageRequest $request){
        $data = $request->validated();

        $newReview = Review::create($data);
        //RITORNA UN JSON CON X COSE
        $newReview = Review::with('chefs')->find($newReview->id);
        return response()->json(
            [
                "success" => true,
                "results" => $newReview
            ]);
    }
}
