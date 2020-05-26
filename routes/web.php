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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('search_control', "SearchController@index");

Route::post('signup_entreprise', 'SignUpEntrepriseController@index');

Route::post('signup_client', 'SignUpClientController@index');

Route::post('ajouter_agences', 'AjoutAgenceController@index');

Route::post('modifier_agences', 'ModifierAgenceController@index');

Route::post('signin', 'SignInController@index');

Route::get('gestion_agences_entreprise', function(){
   return view('contents.gestion-agences-entreprise');
});

Route::get('page_result', function(){
    return view('pages.results');
});

Route::get('/signup-entreprise', function (){
    return view('pages.signup-entreprise');
});

Route::get('/home-entreprise', function(){
    return view('pages.home-entreprise');
});

Route::get('/signup-client', function (){
    return view('pages.signup-client');
});

Route::get('/signin', function (){
    return view('pages.signin');
});

Route::get('/results', function (){
    return view('pages.results');
});