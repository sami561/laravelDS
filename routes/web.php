<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/AjouterEquipe', function () {
    return view('AjoutEquipe');
});
Route::get('/SupprimerEquipe', function () {
    return view('supprimer_equipe');
}); 
Route::get('/AjouterJoueur', function () {
    return view('Ajoutjoueur');
});
Route::get('/SupprimerJoueur', function () {
    return view('Supprimer_joueur');
});
Route::get('/ajouterEquipesAction','App\Http\Controllers\ControllerEquipes@store');
Route::get('/supprimerEquipesAction','App\Http\Controllers\ControllerEquipes@destroy');  
Route::get('/ajouterJoueursAction','App\Http\Controllers\ControllerJoueurs@store');
Route::get('/supprimerJoueursAction','App\Http\Controllers\ControllerJoueurs@destroy'); 
