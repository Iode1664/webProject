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
=======


>>>>>>> d6599b3ffe3cc4d8cf9af287b4ec1766c6325abe
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

