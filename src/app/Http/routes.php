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

use App\Http\Middleware\RoleMiddleware;

Route::group(['prefix'=>'adminzone', 'middleware' => ['auth', RoleMiddleware::class]], function()

{
    Route::get('/', function()
    {
        return view('admin.dashboard');
    });
    Route::resource('articles','ArticlesController');
    Route::resource('pages','PagesController');
    Route::resource('categories','CategoriesController');
    Route::resource('users','UsersController');
    Route::get('comments','CommentsController@show');
    Route::get('comments/delete/{id}','CommentsController@delete');
    Route::get('comments/published/{id}','CommentsController@published');
});


Route::get('/', 'FrontController@index');
Route::get('/show/{id}','FrontController@show');
Route::post('/show/{id}','CommentsController@save');
Route::get('popular','FrontController@popular');
Route::get('archive','ArticlesController@archive');
Route::get('archive/{year}/{month}','ArticlesController@month');
Route::get('gallery','FrontController@gallery');
Route::get('search','FrontController@search');
Route::get('category/{category}','ArticlesController@category');



Route::auth();

Route::get('/home', 'HomeController@index');
