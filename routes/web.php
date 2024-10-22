<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndustryController;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/aboutUs', [HomeController::class, 'aboutUs']);

Route::get('/blog', [HomeController::class, 'blog']);

Route::get('/careers', [HomeController::class, 'careers']);

Route::get('/contactUs', [HomeController::class, 'contactUs']);

Route::get('/privacyPolicy', [HomeController::class, 'privacyPolicy']);

Route::get('/terms', [HomeController::class, 'terms']);

Route::get('/vendorRegistration', [HomeController::class, 'vendorRegistration']);

Route::prefix('/industry')->group(function () {
    Route::get('/aircraftCleaning', [IndustryController::class, 'aircraftCleaning']);
    Route::get('/animalFeeds', [IndustryController::class, 'animalFeeds']);
    Route::get('/aquacultureHygiene', [IndustryController::class, 'aquacultureHygiene']);
    Route::get('/ayurvedicHygiene', [IndustryController::class, 'ayurvedicHygiene']);
    Route::get('/commercialLaundering', [IndustryController::class, 'commercialLaundering']);
    Route::get('/construction', [IndustryController::class, 'construction']);
    Route::get('/consumerHygiene', [IndustryController::class, 'consumerHygiene']);
    Route::get('/dairyHygiene', [IndustryController::class, 'dairyHygiene']);
    Route::get('/foodBeverage', [IndustryController::class, 'foodBeverage']);
    Route::get('/foodManufacturing', [IndustryController::class, 'foodManufacturing']);
    Route::get('/foodSafety', [IndustryController::class, 'foodSafety']);
    Route::get('/houseKeeping', [IndustryController::class, 'houseKeeping']);
    Route::get('/industrialEngymes', [IndustryController::class, 'industrialEngymes']);
    Route::get('/industrialManufacturing', [IndustryController::class, 'industrialManufacturing']);
    Route::get('/metalTreatment', [IndustryController::class, 'metalTreatment']);
    Route::get('/pharmaHygiene', [IndustryController::class, 'pharmaHygiene']);
    Route::get('/pharmaBioChemicals', [IndustryController::class, 'pharmaBioChemicals']);
    Route::get('/railwayCleaning', [IndustryController::class, 'railwayCleaning']);
    Route::get('/specialChemicals', [IndustryController::class, 'specialChemicals']);
    Route::get('/waterTreatment', [IndustryController::class, 'waterTreatment']);
    Route::get('/poultryHygiene', [IndustryController::class, 'poultryHygiene']);
    Route::get('/laboratoryChemicals', [IndustryController::class, 'laboratoryChemicals']);
});
