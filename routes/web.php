<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\CocktailController as GuestCocktailController;

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
});

Route::name('cocktail.')->group(
    function () {
        route::get('/listCocktails', [GuestCocktailController::class, 'index'])->name('index');
        route::get('/listCocktails/{cocktail}', [GuestCocktailController::class, 'show'])->name('show');
    }
);
