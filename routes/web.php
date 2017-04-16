<?php

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
    return view('welcome');
});

<<<<<<< HEAD
Route::get('photo', function () {
    return view('Design-Web/Header-Exia');
});
=======
Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/ajout', 'AjoutController@index');

Route::resource('user', 'UserController');
Route::resource('activite', 'ActiviteController');
Route::resource('statut_membre', 'Statut_membreController');
Route::resource('statut_activite', 'Statut_activiteController');
Route::resource('photo', 'PhotoController');
Route::resource('commentaire', 'CommentaireController');
Route::resource('vote', 'VoteController');
Route::resource('user_activite', 'User_activiteController');
Route::resource('horaire', 'HoraireController');
Route::resource('jaime', 'JaimeController');
>>>>>>> 5ad11b8218f60d2ea679b5fc3b6eacc477fca42d
