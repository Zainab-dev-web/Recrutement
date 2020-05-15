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

Route::resource('accueil', 'AccueilController');
Route::resource('offres', 'OffreController');
Route::resource('talents', 'TalentController');
Route::resource('entreprises', 'EntrepriseController');

Route::get('/contact', function () {
    return view('PageContact.pageContact');
});



Route::get('/profil', function () {
    return view('PageProfil.pageProfil');
});


Route::get('/agenda' , function(){
    return view ('agenda.index');
})->name('index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// choix formulaire inscription
Route::get('/registerform', 'ChoixController@indexform')->name('registerform');
Route::resource('choix', 'ChoixController');
Route::get('/formtalent', 'ChoixController@choixtalent')->name('formtalent');
Route::get('/formentreprise', 'ChoixController@choixentreprise')->name('formentreprise');

