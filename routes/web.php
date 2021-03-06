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
    return view('welcome');
});

Route::get('paints', "PagesController@index");

Route::get('about', "PagesController@about");

/*Route::get('articles', "ArticlesController@index");
Route::get('articles/create', 'ArticlesController@create');
Route::get('articles/{id}', 'ArticlesController@open');
Route::post('articles', 'ArticlesController@store');
Route::get('articles/{id}/edit', 'ArticlesController@edit'); */
Route::resource('articles', 'ArticlesController');
Route::resource('paints', 'PaintsController');

/*Route::get('paints', 'PaintsController@index');
Route::get('paints/create', 'PaintsController@create');
Route::get('paints/{id}', 'PaintsController@open');
Route::post('paints', 'PaintsController@store'); */

