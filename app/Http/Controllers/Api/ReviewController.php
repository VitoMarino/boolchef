<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
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
}
