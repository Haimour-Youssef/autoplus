<?php

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

//


Route::group(['prefix' => 'backoffice','namespace' => 'Admin','middleware' => ['auth','isAdmin']],function () {

	

		Route::get('/', function () {return redirect('backoffice/categories');})->name('backoffice');

		Route::resource('categories', 'CategorieController');
		Route::resource('offres', 'OffreController');
		Route::resource('bannieres', 'BanniereController');
		Route::resource('partenaires', 'PartenaireController');
		Route::resource('promotions', 'PromotionController');
		Route::resource('actualites', 'ActualiteController');
		Route::resource('contacts', 'ContactController');

		Route::resource('parametres', 'ParametreController');

		Route::resource('users', 'UserController');


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

	
});




