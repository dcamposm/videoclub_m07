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
Route::get('/', 'HomeController@getHome');

//Route::get('/prova/{id?}', 'prova\ProvaController@show');

/*Route::get('/login', function()
{   
    return view('auth.login');
});

Route::get('/logout', function()
{   
    return 'Logout usuario';
});*/

Route::group(['middleware' => 'auth'], function() {
    Route::group(['prefix' => 'catalog'], function() {
        Route::get('/', 'CatalogController@getIndex');

        Route::get('show/{id}', 'CatalogController@getShow');

        Route::get('create', 'CatalogController@getCreate');
        
        Route::post('create', 'CatalogController@postCreate');

        Route::get('edit/{id}', 'CatalogController@getEdit');
        
        Route::put('edit/{id}', 'CatalogController@putEdit');
        
        Route::put('rent/{id}', 'CatalogController@putRent');

        Route::put('return/{id}', 'CatalogController@putReturn');
        
        Route::delete('delete/{id}', 'CatalogController@deleteMovie');
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
