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
		Route::resource('referencements', 'SeoController');

		Route::resource('users', 'UserController');
Route::get("generate","SeoController@generateSeo")->name("generate");
	
});




