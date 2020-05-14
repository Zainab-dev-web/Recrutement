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

Route::get('/offres', function () {
    return view('PageOffres.pageOffres');
});

Route::get('/contact', function () {
    return view('PageContact.pageContact');
});

Route::get('/entreprises', function () {
    return view('PageEntreprises.pageEntreprises');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('choix , ChoixController@index');
Route::get('/choix', function () {
    return view('register_form.choix');
})->name('choix');

