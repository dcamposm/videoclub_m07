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
    /*----------------Route catalog movies--------------*/
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
    /*----------------Route actor--------------*/
    Route::group(['prefix' => 'actor'], function() {
        Route::get('/', 'ActorController@getIndex');

        Route::get('show/{id}', 'ActorController@getShow');

        Route::get('create', 'ActorController@getCreate');
        
        Route::post('create', 'ActorController@postCreate');

        Route::get('edit/{id}', 'ActorController@getEdit');
        
        Route::put('edit/{id}', 'ActorController@putEdit');

        Route::delete('delete/{id}', 'ActorController@deleteActor');
    });  
    /*----------------Route director--------------*/
    Route::group(['prefix' => 'director'], function() {
        Route::get('/', 'DirectorController@getIndex');

        Route::get('show/{id}', 'DirectorController@getShow');

        Route::get('create', 'DirectorController@getCreate');
        
        Route::post('create', 'DirectorController@postCreate');

        Route::get('edit/{id}', 'DirectorController@getEdit');
        
        Route::put('edit/{id}', 'DirectorController@putEdit');

        Route::delete('delete/{id}', 'DirectorController@deleteDirector');
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
