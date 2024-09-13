<?php

use App\Http\Controllers\Admin\ChefController as AdminChefController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Guest\CustomerController as GuestCustomerController;
use App\Http\Controllers\HomeController as GuestHomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('admin/dashboard', [AdminChefController::class, 'viewDashboard'])->name('admin.dashboard');

// Rotte profilo utente
Route::get('/message', function(){
    return view('admin.chefs.profile.message');
});
Route::get('/review', function(){
    return view('admin.chefs.profile.review');
});
Route::get('/sponsorship', function(){
    return view('admin.chefs.profile.sponsorship');
});
Route::get('/static', function(){
    return view('admin.chefs.profile.static');
});

// Questo sistema serve per raggruppare tutte le rotte e avere dei prefissi e un raggruppamento che mi velocizza la scrittura delle rotte
Route::middleware('auth')->name('admin.')->prefix('admin/')->group(
    function () {
        // Qui sotto posso raggruppare e scrivere le mie rotte

        // Mi creo anche una risorsa
        Route::resource('/chefs', AdminChefController::class);

        Route::resource('/customers', GuestCustomerController::class);
    }
);
