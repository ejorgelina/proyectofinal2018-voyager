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


Route::get('/lpm', function(){
  return view('prueba');
});

Auth::routes();

Route::get('/publications/create', 'PublicationsController@create')->name('publication');

//agrego rutas para actualizacion Travelplans
Route::get('/travelplans/create', 'TravelplansController@create')->name('travelplan');

//Route::post('/publications/create', 'PublicationsController@store');

Route::get('/faq', 'HomeController@viewFaq')->name('faq');

Route::middleware('checkloggeduser')-> group(function () {

Route::get('/publications', 'PublicationsController@index')->name('publications');

Route::get('/travelplans', 'TravelplansController@index')->name('travelplans');

Route::get('/home/muro', 'PublicationsController@todas');
Route::post('/home/muro', 'HomeController@storeFriend');

Route::get('/perfil', 'HomeController@viewPerfil')->name('perfil');

Route::get('/perfil/config', 'HomeController@viewConfig')->name('configuracion');

Route::get('/travelplans', 'TravelplansController@index')->name('travelplans');

Route::get('/friends', 'HomeController@viewFriends');


            // agregue Eve
            Route::middleware('auth')->group(function () {
                Route::resource('publication', 'PublicationsController');
            });
            // agregue Eve
            Route::middleware('auth')->group(function () {
                Route::resource('travelplan', 'TravelplansController');
            });

});
