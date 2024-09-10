<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Chef;
use Illuminate\Http\Request;

class ChefController extends Controller
{
    public function index(){
        //RITORNA UN JSON CON X COSE
        $chefs = Chef::with('user', 'sponsorships', 'specializations', 'votes')->paginate(5);
        return response()->json(
            [
                "success" => true,
                "results" => $chefs
            ]);
    }

    public function show(Chef $chef){
        $chef->loadMissing('user', 'sponsorships', 'specializations', 'votes', 'messages');
        return response()->json(
            [
                "success" => true,
                "results" => $chef
            ]);
    }
}
