<?php

use App\Http\Controllers\Admin\CategorieController;
use App\Http\Controllers\Admin\EvenementController;
use App\Http\Controllers\Admin\TicketController;
use App\Http\Controllers\Admin\TicketTypeController;
use App\Http\Controllers\Admin\UtilisateurController;
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

$idRegex = '[0-9]+';

// Route::get('/', function () {
//     return view('welcome');
// })->middleware('auth', 'verified');

Route::get('/', function () {
    return view('home');

})->middleware('auth', 'verified');

Route::get('/settings', function () {
    return view('auth.settings');
})->middleware('auth', 'verified');


Route::prefix('admin')->group(function () {

    Route::resources([
        "evenements" => EvenementController::class,
        "categorie" => CategorieController::class,
        "ticket" => TicketController::class,
        "tickettype" => TicketTypeController::class,
        "user" => UtilisateurController::class,
        // "dashboard" => AdminController::class,
    ]);
});

Route::post('ticket-type/{evenement}', [EvenementController::class, 'setTicketType'])->name('setTicketType')
->where([
    'transfert' => $idRegex
]);

// Route::prefix('organisateur')->group(function () {
//     Route::resources([
//         "events" => EventController::class,
//         "sponsors" => SponsorController::class,
//         "posts" => PostController::class,
//     ]);
// });


