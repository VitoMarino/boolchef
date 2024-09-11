<?php

use App\Http\Controllers\Api\ChefController as ApiChefController;
use App\Http\Controllers\Api\SpecializationController as ApiSpecializationController;
use App\Http\Controllers\Api\VoteController as ApiVoteController;
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
Route::post("/chefs", [ApiChefController::class, "store"])->name("api.chefs.store");
Route::get("/chefs/{chef}", [ApiChefController::class, "show"])->name("api.chefs.show");
Route::put("/chefs/{chef}", [ApiChefController::class, "update"])->name("api.chefs.update");






Route::get("/specializations", [ApiSpecializationController::class, "index"])->name("api.specializations.index");
Route::get("/specializations/{specialization}", [ApiSpecializationController::class, "show"])->name("api.specializations.show");

Route::get("/votes", [ApiVoteController::class, "index"])->name("api.votes.index");
Route::get("/votes/{vote}", [ApiVoteController::class, "show"])->name("api.votes.show");


