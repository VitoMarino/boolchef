<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // public function login(Request $request)
    // {
    //     $credentials = $request->validate([
    //         'email' => ['required', 'email'],
    //         'password' => ['required'],
    //     ]);

    //     if (Auth::attempt($credentials)) {
    //         $request->session()->regenerate();

    //         return response()->json([
    //             'success' => true,
    //             'message' => 'Login effettuato con successo'
    //         ]);
    //     }

    //     return response()->json([
    //         'success' => false,
    //         'message' => 'Credenziali non valide'
    //     ], 401);
    // }

    // public function logout(Request $request)
    // {
    //     Auth::guard('web')->logout();

    //     $request->session()->invalidate();
    //     $request->session()->regenerateToken();

    //     return response()->json([
    //         'success' => true,
    //         'message' => 'Logout effettuato con successo',
    //     ]);
    // }
}
