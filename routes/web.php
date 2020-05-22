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

Route::get('/' , 'AccueilController@index')->name('accueil');


Route::resource('offres', 'OffreController');
Route::get('/searchoffre/{id}', 'OffreController@searchoffre')->name('searchoffre');
Route::resource('talents', 'TalentController');
Route::resource('entreprises', 'EntrepriseController')->middleware('isConnect');
Route::resource('contact', 'ConctatController');
Route::resource('profil', 'ProfilController')->middleware('isConnect');
Route::resource('candidat', 'CandidatController')->middleware('isConnect');
Route::resource('admin','AdminController')->middleware('GestionUser');
Route::get('refuser/{id}', 'CandidatController@refuser')->name('refuser')->middleware('isConnect');
Route::get('accepter/{id}', 'CandidatController@accepter')->name('accepter')->middleware('isConnect');
Route::resource('date', 'DateController')->middleware('isConnect');
Route::resource('event', 'EventController')->middleware('isConnect');
Route::resource('evaluation', 'EvaluationController');


//fullcalendar ->Agenda

Route::get('/fullcalendareventmaster', 'FullCalendarEventMasterController@index')->name('agenda')->middleware('isConnect');
Route::get('/fullcalendareventmaster/add', 'FullCalendarEventMasterController@add')->name('add')->middleware('isConnect');
Route::post('/fullcalendareventmaster/store', 'FullCalendarEventMasterController@store')->name('store');
Route::post('/fullcalendareventmaster/create', 'FullCalendarEventMasterController@create')->name('create')->middleware('isConnect');
Route::post('/fullcalendareventmaster/update', 'FullCalendarEventMasterController@update');
Route::post('/fullcalendareventmaster/delete', 'FullCalendarEventMasterController@destroy')->middleware('isConnect');
Route::get('/agenda' , function(){
    return view ('agenda.index');
})->name('index')->middleware('isConnect');
Auth::routes();



// Choix formulaire inscription
Route::get('/registerform', 'ChoixController@indexform')->name('registerform');
Route::resource('choix', 'ChoixController');
Route::get('/formtalent', 'ChoixController@choixtalent')->name('formtalent');
Route::get('/formentreprise', 'ChoixController@choixentreprise')->name('formentreprise');



//userSearch
Route::get('/searchUser', 'UserController@search')->name('searchUser')->middleware('isAdmin');


//Resource Global
Route::resource('accueil', 'AccueilController');
Route::resource('offres', 'OffreController')->middleware('isConnect');
Route::resource('talents', 'TalentController')->middleware('isConnect');
Route::resource('entreprises', 'EntrepriseController')->middleware('isConnect');
Route::resource('event', 'EventController')->middleware('isConnect');
Route::resource('user', 'UserController')->middleware('GestionUser');
Route::resource('match', 'MatchController')->middleware('isConnect');
Route::resource('formcontact' , "FormcontactController")->middleware('isAdmin');
Route::resource('newsletter', 'NewsletterController');
Route::resource('carousel', 'CarouselController')->middleware('isAdmin');
Route::resource('service', 'ServiceController')->middleware('isAdmin');
Route::resource('work', 'WorkController')->middleware('isAdmin');
Route::resource('contactInfo', 'ContactController')->middleware('isAdmin');
Route::resource('info', 'InfoController')->middleware('isAdmin');


