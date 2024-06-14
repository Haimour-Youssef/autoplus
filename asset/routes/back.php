<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//


Route::group(['middleware' => ['auth','can:admin'],'prefix' => 'backoffice','namespace' => 'Admin'],function () {

	

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

	
});




