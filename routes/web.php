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

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/ajout', 'MembreController@index');
Route::post('/ajout/membre', ['as' => 'ajout-membre', 'uses' => 'MembreController@create']);

Route::post('/ajout/vote', ['as' => 'activites.vote', 'uses' => 'ActiviteController@voteStore']);
Route::post('/activites/suggestion', ['as' => 'activites.stores', 'uses' => 'ActiviteController@stores']);



Route::get('/activites', [
    'as' => 'activites.show',
    'uses' => 'ActiviteController@index'
]);

Route::get('/activite/{id}/participants', [
    'uses' => 'ActiviteController@getParticipants',
    'as' => 'activity.participants'
]);

Route::get('/activite/{id}', [
    'uses' => 'ActiviteController@getActivity',
    'as' => 'activity.show'
]);

Route::post('/activite/{id}', [
    'uses' => 'ActiviteController@store',
    'as' => 'activity.store'
]);

Route::get('/participer/{id}', [
    'uses'=>'ActiviteController@participer',
    'as'=>'activity.participer'
]);

Route::get('/suggestions', [
    'uses'=>'ActiviteController@getSuggestions',
    'as'=>'activity.suggestions'
]);

Route::get('/unparticiper/{id}', [
    'uses'=>'ActiviteController@unparticiper',
    'as'=>'activity.unparticiper'
]);

$router->group(['middleware' => 'csrf'], function($router)
{
    Route::post('/activites/vote', ['as' => 'activites.vote', 'uses' => 'ActiviteController@vote']);

});

Route::get('/unvote/{id}', [
    'uses'=>'ActiviteController@unvote',
    'as'=>'activites.unvote'
]);


Route::get('/gallery/{id}', [
    'uses'=>'ActiviteController@getGallery',
    'as'=>'activity.gallery'
]);




Route::get('/commentaire/{id}', ['uses' => 'CommentaireController@index', 'as' => 'commentaire.index']);

Route::post('/commentaire/{id}', [ 'uses' => 'CommentaireController@store', 'as' => 'commentaire.store']);


Route::post('/commentaire/{id}', [ 'uses' => 'CommentaireController@store', 'as' => 'commentaire.store']);


Route::post('/gallery/{id}', ['uses' => 'PhotoController@store', 'as' =>'photo.store']);





Route::resource('user', 'UserController');
Route::resource('activites', 'ActiviteController');
Route::resource('activite', 'ActivitesController');
Route::resource('statut_membre', 'Statut_membreController');
Route::resource('statut_activite', 'Statut_activiteController');

Route::resource('vote', 'VoteController');
Route::resource('user_activite', 'User_activiteController');
Route::resource('horaire', 'HoraireController');
Route::resource('jaime', 'JaimeController');
Route::resource('product', 'ProductController');




Route::get('/shop', [
    'uses'=>'ProductController@getIndex',
    'as'=>'product.index'
]);

Route::get('/add-to-cart/{id}', [
    'uses'=>'ProductController@getAddToCart',
    'as'=>'product.addToCart'
]);

Route::get('/reduce/{id}', [
    'uses' => 'ProductController@getReduceByOne',
    'as' => 'product.reduceByOne'
]);
Route::get('/remove/{id}', [
    'uses' => 'ProductController@getRemoveItem',
    'as' => 'product.remove'
]);

Route::get('/shoppingCart}', [
    'uses'=>'ProductController@getCart',
    'as'=>'product.shoppingCart'
]);