<?php

use App\Http\Controllers\Admin\ChefController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ChefController as ApiChefController;
use App\Http\Controllers\Api\MessageController;
use App\Http\Controllers\Api\ReviewController;
use App\Http\Controllers\Api\SpecializationController as ApiSpecializationController;
use App\Http\Controllers\api\SponsorshipController;
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
Route::get("/chefs/{chef}", [ApiChefController::class, "show"])->name("api.chefs.show");
Route::put("/chefs/{chef}", [ApiChefController::class, "update"])->name("api.chefs.update");

Route::get("/users", [ApiUserController::class, "index"])->name("api.users.index");
Route::post("/users", [ApiUserController::class, "store"])->name("api.users.store");


Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');


Route::get("/specializations", [ApiSpecializationController::class, "index"])->name("api.specializations.index");
Route::get("/specialization/search", [ApiChefController::class, "SpecializationSearch"])->name('api.specialization.search');
Route::get("/specializations/{specialization}", [ApiSpecializationController::class, "show"])->name("api.specializations.show");


Route::get("/votes", [ApiVoteController::class, "index"])->name("api.votes.index");
Route::post("/votes", [ApiVoteController::class, "store"])->name("api.vote.store");
Route::get("/vote/search", [ApiChefController::class, "VoteSearch"])->name('api.vote.search');
Route::get("/votes/{vote}", [ApiVoteController::class, "show"])->name("api.votes.show");

Route::get("/reviews", [ReviewController::class, "index"])->name("api.reviews.index");
Route::post("/reviews", [ReviewController::class, "store"])->name("api.reviews.store");

Route::post("/messages", [MessageController::class, "store"])->name("api.messages.store");

Route::get("/sponsorships", [SponsorshipController::class, "index"])->name("api.sponsorships.index");
