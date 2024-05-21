<?php

use App\Http\Controllers\Evenement;
use App\Http\Controllers\Admin\EvenementController;
use App\Http\Controllers\TypeEvenement;
use App\Http\Controllers\Admin\TypeEvenementController;
use App\Http\Controllers\SponsorController;
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
    return view('welcome');
})->middleware('auth');

Route::get('/home', function () {
    return view('home');

})->middleware('auth');


Route::prefix('admin')->group(function () {

    Route::resources([
        "evenements" => EvenementController::class,
        "categories" => TypeEvenementController::class,
    ]);
});

Route::prefix('organisateur')->group(function () {
    Route::resources([
        "evenements" => EvenementController::class,
        "sponsor" => SponsorController::class,
    ]);
});
