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

Route::get('/', 'PublicationsController@index')->name('home');

Auth::routes();

Route::get('/publications/create', 'PublicationsController@create')->name('publication');

Route::post('/publications/create', 'PublicationsController@store');

Route::get('/faq', 'HomeController@viewFaq')->name('faq');

Route::middleware('checkloggeduser')-> group(function () {

Route::get('/publications', 'PublicationsController@index')->name('publications');

Route::get('/home/muro', 'PublicationsController@todas');

Route::get('/perfil', 'HomeController@viewPerfil')->name('perfil');

Route::get('/perfil/config', 'HomeController@viewConfig')->name('configuracion');

Route::get('/travelplans', 'TravelplansController@index')->name('travelplans');


Route::get('/friends', 'HomeController@viewFriends');




});
