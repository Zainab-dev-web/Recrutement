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
    return view('PageAccueil.pageAccueil');
});

Route::resource('/offres', 'OffreController');

Route::get('/contact', function () {
    return view('PageContact.pageContact');
});

Route::get('/entreprises', function () {
    return view('PageEntreprises.pageEntreprises');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// choix formulaire inscription
Route::get('/registerform', 'ChoixController@indexform')->name('registerform');
Route::resource('choix', 'ChoixController');
Route::get('/formtalent', 'ChoixController@choixtalent')->name('formtalent');
Route::get('/formentreprise', 'ChoixController@choixentreprise')->name('formentreprise');

