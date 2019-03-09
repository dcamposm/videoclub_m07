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
    /*----------------Route comments--------------*/
    Route::group(['prefix' => 'comment'], function() {;

        Route::get('create', 'CommentsController@getCreate');
        
        Route::post('create', 'CommentsController@postCreate');

        Route::get('edit/{id}', 'CommentsController@getEdit');
        
        Route::put('edit/{id}', 'CommentsController@putEdit');
        
        Route::delete('delete/{id}', 'CommentsController@deleteComment');
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
    /*----------------Route user--------------*/
    Route::group(['prefix' => 'user'], function() {
        Route::get('/', 'UserController@getIndex');

        Route::get('show/{id}', 'UserController@getShow');

        Route::get('create', 'UserController@getCreate');
        
        Route::post('create', 'UserController@postCreate');

        Route::get('edit/{id}', 'UserController@getEdit');
        
        Route::put('edit/{id}', 'UserController@putEdit');

        Route::delete('delete/{id}', 'UserController@deleteUser');
    });
    /*----------------Route genre--------------*/
    Route::group(['prefix' => 'genre'], function() {
        Route::get('/', 'GenreController@getIndex');

        Route::get('show/{id}', 'GenreController@getShow');

        Route::get('create', 'GenreController@getCreate');
        
        Route::post('create', 'GenreController@postCreate');

        Route::get('edit/{id}', 'GenreController@getEdit');
        
        Route::put('edit/{id}', 'GenreController@putEdit');

        Route::delete('delete/{id}', 'GenreController@deleteGenre');
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
