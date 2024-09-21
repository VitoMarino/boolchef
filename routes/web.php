<?php

use App\Http\Controllers\Admin\ChefController as AdminChefController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\PaymentController as AdminPaymentController;
use App\Http\Controllers\Admin\SponsorshipController;
use App\Http\Controllers\Guest\CustomerController as GuestCustomerController;
use App\Http\Controllers\HomeController as GuestHomeController;
use App\Http\Controllers\Controller\Auth\LoginController;
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

//Rotta di check email utente
//Route::post('/check-email', [LoginController::class, 'checkEmail'])->name('check.email');

Auth::routes();

Route::get('admin/dashboard', [AdminChefController::class, 'viewDashboard'])->name('admin.dashboard');

// Rotte profilo utente

Route::get('/admin/chefs/show/{user_id}', [AdminChefController::class, 'userAuthenticated'])->name('admin.chefs.show');

Route::get('/admin/message/{chef}', [AdminChefController::class, 'viewMessage'])->name('admin.chefs.profile.message');

Route::get('/admin/review/{chef}', [AdminChefController::class, 'viewReview'])->name('admin.chefs.profile.review');


Route::get('/payment', [AdminPaymentController::class, 'showPaymentForm'])->name('payment.form');
Route::post('/payment', [AdminPaymentController::class, 'processPayment'])->name('payment.process');



Route::get('/sponsorship', [SponsorshipController::class, 'index'])->name('admin.sponsorships.index');


Route::post('/sponsorships/checkout', [SponsorshipController::class, 'checkout'])->name('admin.sponsorships.checkout');

Route::get('/static', function () {
    return view('admin.chefs.profile.static');
});

//Route:get('/admin/chefs/{chef}', [AdminChefController::class, 'show'])->name('admin.chefs.profile');

// Questo sistema serve per raggruppare tutte le rotte e avere dei prefissi e un raggruppamento che mi velocizza la scrittura delle rotte
Route::name('admin.')->prefix('admin/')->group(
    function () {
        // Qui sotto posso raggruppare e scrivere le mie rotte
        Route::resource('chefs', AdminChefController::class);
        // Mi creo anche una risorsa

        //Route::get('dashboard', [AdminChefController::class, 'viewDashboard'])->name('dashboard');

        Route::resource('/customers', GuestCustomerController::class);
    }

);
//Route::middleware('auth')->group(
   // function () {

     //   Route::get('admin/dashboard', [AdminChefController::class, 'viewDashboard'])->name('admin.dashboard');

      // Route::get('/sponsorship', [SponsorshipController::class, 'index'])->name('admin.sponsorships.index');


      // Route::post('/sponsorships/checkout', [SponsorshipController::class, 'checkout'])->name('admin.sponsorships.checkout');
      //  Route::get('/admin/chefs/show/{user_id}', [AdminChefController::class, 'userAuthenticated'])->name('admin.chefs.show');

      //  Route::get('/admin/message/{chef}', [AdminChefController::class, 'viewMessage'])->name('admin.chefs.profile.message');

      //  Route::get('/admin/review/{chef}', [AdminChefController::class, 'viewReview'])->name('admin.chefs.profile.review');


      //  Route::get('/static', function () {
      //      return view('admin.chefs.profile.static');
      //  });
//}

//);

