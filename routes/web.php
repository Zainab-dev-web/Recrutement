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
Route::post('updateUser/{id}' , 'ProfilController@updateUser')->name('updateUser');
Route::get('/searchoffre/{id}', 'OffreController@searchoffre')->name('searchoffre');
Route::resource('contact', 'ConctatController');
Route::resource('profil', 'ProfilController');
Route::resource('candidat', 'CandidatController');
Route::resource('admin','AdminController');
Route::get('refuser/{id}', 'CandidatController@refuser')->name('refuser');
Route::get('accepter/{id}', 'CandidatController@accepter')->name('accepter');
Route::resource('date', 'DateController');
Route::get('refus/{id}', 'DateController@refuser')->name('refuserdate');
Route::resource('evaluation', 'EvaluationController')->middleware('isConnect');
Route::resource('note', 'NoteController')->middleware('isConnect');
Route::get('errorValidateProfile', 'Valid@index')->name('nonvalid');
Route::resource('resultat', 'ResultatController');
Route::resource('entretien', 'EntretienController')->middleware('isEntreprise');
Route::resource('vosOffres', 'VosOffresController');


//fullcalendar->Agenda

Route::get('/fullcalendareventmaster', 'FullCalendarEventMasterController@index')->name('agenda')->middleware('isConnect');
Route::get('/fullcalendareventmaster/add', 'FullCalendarEventMasterController@add')->name('add')->middleware('isConnect');
Route::post('/fullcalendareventmaster/store', 'FullCalendarEventMasterController@store')->name('store');
Route::post('/fullcalendareventmaster/create', 'FullCalendarEventMasterController@create')->name('create')->middleware('isConnect');
Route::post('/fullcalendareventmaster/update', 'FullCalendarEventMasterController@update');
Route::post('/fullcalendareventmaster/delete', 'FullCalendarEventMasterController@destroy')->middleware('isConnect');
Auth::routes();



// Choix formulaire inscription
Route::get('/registerform', 'ChoixController@indexform')->name('registerform');
Route::resource('choix', 'ChoixController');
Route::get('/formtalent', 'ChoixController@choixtalent')->name('formtalent');
Route::get('/formentreprise', 'ChoixController@choixentreprise')->name('formentreprise');



//userSearch
Route::get('/searchUser', 'UserController@search')->name('searchUser')->middleware('isAdmin');
//searchOffre
Route::get('/searchOffre', 'OffreController@search')->name('searchOffre');
//searchDomaine
Route::get('/searchDomaine', 'EntrepriseController@search')->name('searchDomaine');
Route::get('/searchDomaine', 'TalentController@search')->name('searchDomaine');


//Resource Global

Route::resource('accueil', 'AccueilController');
Route::resource('offres', 'OffreController');
Route::resource('talents', 'TalentController');
Route::resource('entreprises', 'EntrepriseController');
Route::resource('event', 'EventController')->middleware('isConnect');
Route::resource('user', 'UserController')->middleware('GestionUser');
Route::get('showUser', 'Usercontroller@showUser')->name('showUser');
Route::resource('match', 'MatchController')->middleware('isAdmin');
Route::resource('formcontact' , "FormcontactController")->middleware('isAdmin');
Route::resource('newsletter', 'NewsletterController');
Route::resource('carousel', 'CarouselController')->middleware('isAdmin');
Route::resource('service', 'ServiceController')->middleware('isAdmin');
Route::resource('work', 'WorkController')->middleware('isAdmin');
Route::resource('contactInfo', 'ContactController')->middleware('isAdmin');
Route::resource('info', 'InfoController')->middleware('isAdmin');
Route::resource('profilGestion', 'ProfilgestionController')->middleware('GestionUser');
Route::resource('settings', 'SettingsController')->middleware('isConnect');


