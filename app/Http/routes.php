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

Route::get('about', 'AboutController@index');

Route::get('/', 'WelcomeController@index');

/*
 * Static about-us page!
 */
Route::get('/about-us', function () {
    return View::make('about-us.index');
});

/*
 * Notebooks Resource
 */
Route::resource('/books', 'BooksController');
