<?php

use App\Http\Controllers\Api\ChefController as ApiChefController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/chefs", [ApiChefController::class, "index"])->name("api.chefs.index");
Route::get("/chefs/{chef}", [ApiChefController::class, "show"])->name("api.chefs.show");
