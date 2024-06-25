<?php

use App\Models\User;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Route;



Route::get('/',  'HomeController@index')->name('home');
Route::view('/nous-contacter','front.pages.contact')->name('contact');
Route::view('/services','front.pages.services')->name('services');

Route::view('/services/presence-terrain','front.pages.services_presence')->name('services.presence');
Route::view('/services/livraion-express','front.pages.services_livraison')->name('services.livraison');
Route::view('/services/accompagnement-business','front.pages.services_business')->name('services.business');
Route::view('/services/accompagnement-technique','front.pages.services_technique')->name('services.technique');
Route::view('/services/evenements','front.pages.services_evenements')->name('services.evenements');



Route::view('/varta','front.pages.varta')->name('varta');


Route::view('/marques-autoplus/filtration','front.pages.marques_autoplus_filtration')->name('marquesautoplus.filtration');
Route::view('/marques-autoplus/freinage','front.pages.marques_autoplus_freinage')->name('marquesautoplus.freinage');
Route::view('/marques-autoplus/amortisseur-suspension-direction','front.pages.marques_autoplus_amort')->name('marquesautoplus.amort');
Route::view('/marques-autoplus/lubrifiant-fluide','front.pages.marques_autoplus_lubrif')->name('marquesautoplus.lubrif');
Route::view('/marques-autoplus/demarrage-electrique','front.pages.marques_autoplus_demarrage')->name('marquesautoplus.demarrage');



Route::get('/media','HomeController@media')->name('media');
Route::get('/media/{actualite}','HomeController@mediaDet')->name('media-details');
Route::get('/produits/{categorie}','HomeController@produitDet')->name('produits');

Route::view('/qui-sommes-nous','front.pages.autoplus')->name('autoplus');
Route::view('/autoplus/{section}','front.pages.autoplus')->name('nos-valeurs-autoplus');
Route::view('/processus-de-recrutement','front.pages.processus')->name('processus');
Route::view('/nos-valeurs','front.pages.valeurs')->name('valeurs');
Route::view('/travaillez-chez-maghreb-accessoires','front.pages.travailler')->name('travailler');

Route::view('/ressources-humaines','front.pages.rh')->name('rh');
Route::view('/my-autoplus','front.pages.myautoplus')->name('myautoplus');
Route::view('/marques-autoplus','front.pages.marquesautoplus')->name('marquesautoplus');

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



Route::GET('/1', function(){
	$user = User::create([
		'name'=>"jack",
		'email'=>"yoxo@gmail.com",
		'username'=>"Autoplus",
		'prenom'=>"pow",
		'tel'=>"0600000000",
		'adresse'=>"lissasfa, kasbat amine 1",
		'contrat'=>"CDI",
		'metier'=>"Developpeur",
		'mobilite'=>"Nationale",
		'password'=>Hash::make("123456789")
	]);
	
});


Route::get('/clear-cache', function() {
	$exitCode = Artisan::call('route:cache');
	echo 'Routes cache cleared </br>';
	$exitCode = Artisan::call('config:cache');
	echo 'Config cache cleared </br>';
	$exitCode = Artisan::call('cache:clear');
	echo 'Application cache cleared </br>';
	$exitCode = Artisan::call('view:clear');
	echo 'View cache cleared </br>';
	$exitCode = Artisan::call('optimize:clear');
	echo 'Optimize cleared </br>';
	// $exitCode = Artisan::call('storage:link');
	// echo 'storage linked </br>';
});

Auth::routes();
