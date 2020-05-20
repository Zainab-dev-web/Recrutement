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

Route::get('/', function() {
    return view('PageAccueil.pageAccueil');
})->name('accueil');

Route::resource('accueil', 'AccueilController');
Route::resource('offres', 'OffreController');
Route::get('/searchoffre/{id}', 'OffreController@searchoffre')->name('searchoffre');
Route::resource('talents', 'TalentController');
Route::resource('entreprises', 'EntrepriseController');
Route::resource('contact', 'ConctatController');
Route::resource('profil', 'ProfilController');
Route::resource('candidat', 'CandidatController');
Route::resource('admin','AdminController');
Route::get('refuser/{id}', 'CandidatController@refuser')->name('refuser');
Route::get('accepter/{id}', 'CandidatController@accepter')->name('accepter');


//fullcalendar

Route::get('/fullcalendareventmaster', 'FullCalendarEventMasterController@index')->name('agenda');
Route::get('/fullcalendareventmaster/add', 'FullCalendarEventMasterController@add')->name('add');
Route::post('/fullcalendareventmaster/store', 'FullCalendarEventMasterController@store')->name('store');
Route::post('/fullcalendareventmaster/create', 'FullCalendarEventMasterController@create')->name('create');
Route::post('/fullcalendareventmaster/update', 'FullCalendarEventMasterController@update');
Route::post('/fullcalendareventmaster/delete', 'FullCalendarEventMasterController@destroy');
Route::get('/agenda' , function(){
    return view ('agenda.index');
})->name('index');
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


// choix formulaire inscription
Route::get('/registerform', 'ChoixController@indexform')->name('registerform');
Route::resource('choix', 'ChoixController');
Route::get('/formtalent', 'ChoixController@choixtalent')->name('formtalent');
Route::get('/formentreprise', 'ChoixController@choixentreprise')->name('formentreprise');



//userSearch
Route::get('/searchUser', 'UserController@search')->name('searchUser');
//ressource
Route::resource('accueil', 'AccueilController');
Route::resource('offres', 'OffreController');
Route::resource('talents', 'TalentController');
Route::resource('entreprises', 'EntrepriseController');
Route::resource('event', 'EventController');
Route::resource('user', 'UserController');
Route::resource('match', 'MatchController');
Route::resource('formcontact' , "FormcontactController");
Route::resource('newsletter', 'NewsletterController');
Route::resource('carousel', 'CarouselController');


