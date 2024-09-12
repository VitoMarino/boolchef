<?php

use App\Http\Controllers\Admin\ChefController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ChefController as ApiChefController;
use App\Http\Controllers\Api\SpecializationController as ApiSpecializationController;
use App\Http\Controllers\Api\UserController as ApiUserController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::middleware('auth:sanctum')->group(function () {
//     Route::post("/chefs", [ApiChefController::class, "store"])->name("api.chefs.store");
//     Route::put("/chefs/{chef}", [ApiChefController::class, "update"])->name("api.chefs.update");
// });

Route::get("/chefs", [ApiChefController::class, "index"])->name("api.chefs.index");
Route::post("/chefs", [ApiChefController::class, "store"])->name("api.chefs.store");
Route::get("/chefs/search", [ApiChefController::class, "ChefSearch"])->name('api.chefs.search');
Route::get("/chefs/vote/search", [ApiChefController::class, "VoteChefSearch"])->name('api.chefs.vote.search');
Route::get("/chefs/{chef}", [ApiChefController::class, "show"])->name("api.chefs.show");
Route::put("/chefs/{chef}", [ApiChefController::class, "update"])->name("api.chefs.update");

Route::get("/users", [ApiUserController::class, "index"])->name("api.users.index");
Route::post("/users", [ApiUserController::class, "store"])->name("api.users.store");


Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');


Route::get("/specializations", [ApiSpecializationController::class, "index"])->name("api.specializations.index");
Route::get("/specializations/{specialization}", [ApiSpecializationController::class, "show"])->name("api.specializations.show");

Route::get("/votes", [ApiVoteController::class, "index"])->name("api.votes.index");
Route::get("/votes/{vote}", [ApiVoteController::class, "show"])->name("api.votes.show");
