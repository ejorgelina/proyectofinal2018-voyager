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
    return view('home');
});

Auth::routes();

// Route::get('/home', 'HomeController@index');

// Route::get('/login', 'HomeController@viewlogin');

Route::get('/publication/create', 'PublicationsController@create')->name('publication');

Route::post('/publication', 'PublicationsController@store');

Route::get('/faq', 'HomeController@viewFaq')->name('faq');

Route::middleware('checkloggeduser')-> group(function () {

Route::get('/publications', 'PublicationsController@index')->name('publications');

Route::get('/perfil', 'HomeController@viewPerfil')->name('perfil');

Route::get('/logout', 'Auth\LoginController@pruebaLogout');



Route::get('/friends', 'HomeController@viewFriends');




});

Route::get('/travelplans', 'TravelplansController@index');

// Auth::routes();
//
// Route::get('/travelplans','HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
