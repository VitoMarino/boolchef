<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Specialization;
use Illuminate\Http\Request;

class SpecializationController extends Controller
{
    public function index()
    {

        $specializations = Specialization::with('chefs')->orderBy('name', 'asc')->get();
        return response()->json(
            [
                "success" => true,
                "results" => $specializations
            ]
        );
    }


    public function show(Specialization $specialization)
    {
        $specialization->loadMissing('chefs');
        return response()->json(
            [
                "success" => true,
                "results" => $specialization
            ]
        );
    }
}
