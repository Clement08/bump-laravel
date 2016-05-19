<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/


Route::group(['middleware' => 'web'], function () {
    Route::auth();


    Route::get('/', 'HomeController@index');//la page login est la page d'accueil

    Route::resource('/post', 'PostController');
    Route::resource('/comment', 'CommentController');
    Route::resource('/user', 'UserController');
    Route::resource('/project', 'ProjectController');
    Route::resource('/password', 'PasswordController');


    Route::get('contact',
        ['as' => 'contact', 'uses' => 'ContactController@create']);
    Route::post('contact',
        ['as' => 'contact_store', 'uses' => 'ContactController@store']);

    Route::get('auth/facebook', 'AuthController@redirectToProvider');
    Route::get('auth/facebook/callback', 'AuthController@handleProviderCallback');

    Route::get('/admin', function(){
        return view('errors.503');
    })->middleware('isadmin');

});


