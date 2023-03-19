<?php

use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\OurClientController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ServiceController;
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

// Route::get('/', function () {
//     return view("welcome");
// });


Route::get('/', [LoginController::class, 'login']);
Route::get('/service', [ServiceController::class, 'index']);
Route::get('/about-us', [AboutUsController::class, 'aboutUs']);
Route::get('/landing-page', [LandingPageController::class, 'landingPage']);
Route::get('/our-client', [OurClientController::class, 'ourClient']);