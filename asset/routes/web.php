<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/',  'HomeController@index')->name('home');
Route::view('/contact','front.pages.contact')->name('contact');
Route::get('/media','HomeController@media')->name('media');
Route::get('/media/{actualite}','HomeController@mediaDet')->name('media-details');
Route::view('/produits','front.pages.produits')->name('produits');
Route::view('/produits2','front.pages.produits2')->name('produits2');
Route::view('/autoplus','front.pages.autoplus')->name('autoplus');
Route::view('/processus-de-recrutement','front.pages.processus')->name('processus');
Route::view('/nos-valeurs','front.pages.valeurs')->name('valeurs');
Route::view('/travaillez-chez-maghreb-accessoires','front.pages.travailler')->name('travailler');

Route::view('/ressources-humaines','front.pages.rh')->name('rh');

Route::get('/espace-candidats','HomeController@espaceCandidat')->name('candidat');
Route::view('/espace-candidats-inscription','front.pages.candidat-inscription')->name('candidat-inscription');

Route::view('/offres-d-emploi','front.pages.offres')->name('offres');
Route::get('/offres-d-emploi/{offre}','HomeController@offreDet')->name('offre-details');
Route::get('/offres-d-emploi/{offre}/postuler','HomeController@offrePostule')->name('offre-postuler');

Route::post('/sendEmail','HomeController@sendEmail')->name('sendEmail');




Route::group(['middleware' => ['auth']],function () {

	Route::get('mon-espace','HomeController@monEspace')->name('monEspace');
	Route::get('change-password', 'ChangePasswordController@index');
	Route::post('change-password', 'ChangePasswordController@store')->name('change.password');


	Route::resource ('profile', 'ProfileController', [
		'only' => ['edit', 'update'],
		'parameters' => ['profile' => 'user']
	]);
	

});





Route::get('/clear-cache', function() {
	$exitCode = Artisan::call('cache:clear');
	$exitCode = Artisan::call('config:cache');
	$exitCode = Artisan::call('view:clear');
	$exitCode = Artisan::call('optimize:clear');

    return 'DONE'; //Return anything
});

Auth::routes();
