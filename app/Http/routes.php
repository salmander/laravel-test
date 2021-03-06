<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
// Default route to articles
//Route::get('/', 'ArticlesController@index');
//Route::get('articles/create', 'ArticlesController@create');
//Route::get('articles/{id}', 'ArticlesController@show');
//Route::post('/', 'ArticlesController@store');

Route::resource('articles', 'ArticlesController');

// Static pages controller
Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');

// Authentication
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

// Admin section (testing middleware)
Route::get('admin', 'AdminController@index');

Route::get('/', function() {
    return redirect('articles');
});