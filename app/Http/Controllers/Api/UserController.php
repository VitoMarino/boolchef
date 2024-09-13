<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserController;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        //RITORNA UN JSON CON X COSE
        $users = User::with('chef')->get();
        return response()->json(
            [
                "success" => true,
                "results" => $users
            ]);
    }

    public function store(StoreUserController $request){
        $data = $request->validated();
        $email = $request->input('email');
        session(['user_email' => $email]);

        $newUser = User::create($data);
        return response()->json(
            [
                "success" => true,
                "results" => $newUser
            ]);
    }
}
