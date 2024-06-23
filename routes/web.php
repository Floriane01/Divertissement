<?php

use App\Http\Controllers\Admin\CategorieController;
use App\Http\Controllers\Admin\EvenementController;
use App\Http\Controllers\Admin\TicketController;
use App\Http\Controllers\Admin\TicketTypeController;
use App\Http\Controllers\Admin\UtilisateurController;
use App\Http\Controllers\User\UserController;
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

Route::get('/', function () {
    return view('home');
});
// ->middleware('auth', 'verified');


Route::get('/flo', function() {
    return view();
});





Route::get('/settings', function () {
    return view('auth.settings');
})->middleware('auth', 'verified');

Route::get('/admin', function () {
    return view('admin.dashboard-admin');
});


Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::resources([
        "evenements" => EvenementController::class,
        "categorie" => CategorieController::class,
        "ticket" => TicketController::class,
        "tickettype" => TicketTypeController::class,
        "user" => UtilisateurController::class,
        // "dashboard" => AdminController::class,
    ]);
    Route::get('/event-creation', [EvenementController::class, 'store'])->name('event.creation');
});

Route::post('ticket-type/{evenement}', [EvenementController::class, 'setTicketType'])->name('setTicketType')
    ->where([
        'transfert' => $idRegex
    ]);

Route::group([['middleware' => ['auth'], 'as' => 'user.']], function () {
    Route::resources(["evenement" => UserController::class,]);
});

Route::get('/detail', function () {
    return view('user.evenement.show');
});


Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {

});
