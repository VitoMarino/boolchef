<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserController;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(StoreUserController $request){
        $data = $request->validated();

        $newUser = User::create($data);
        return response()->json(
            [
                "success" => true,
                "results" => $newUser
            ]);
    }
}
