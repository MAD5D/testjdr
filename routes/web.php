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

Route::get('/', 'accueil_controler@index');
Route::post('/', 'accueil_controler@inscription');


Route::get('/contact', function () {
	return response('Je suis la page 1 !',200);
});

Route::get('/login', function () {
	return 'ok';
});

Route::get('/test',function(){
	return view ('welcome');
});

Route::resource('utilisateur','Controleur_utilisateur');
Route::resource('personnage','controleur_personnage')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('tamere', function(){
	return response('OK de OUF');
})->middleware('auth');

Route::get('tamere2', function(){
	Auth::logout();
	return response('hey !');
});
