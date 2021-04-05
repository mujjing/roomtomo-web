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

Auth::routes();
Route::get('/', 'TopController@show')->name('top');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/contact', 'ContactController@show')->name('contact.show');
Route::get('/contact/create', 'ContactController@contactCreate')->name('contact.create.show');
Route::post('/contact/create', 'ContactController@create')->name('contact.create');
Route::get('/contact/{id}', 'ContactController@read')->name('contact.read');
Route::get('/contact/update/{id}', 'ContactController@contactUpdate')->name('contact.update.show');
Route::post('/contact/update/{id}', 'ContactController@update')->name('contact.update');

Route::get('/search', 'SearchController@show')->name('search.show');
Route::get('/search/area', 'SearchController@area')->name('search.area');
Route::get('/search/station', 'SearchController@station')->name('search.station');
Route::get('/search/train/tokaido', 'SearchController@tokaido')->name('search.train.tokaido');
Route::get('/search/train/keihintohoku', 'SearchController@keihintohoku')->name('search.train.keihintohoku');
Route::get('/search/train/yamanote', 'SearchController@yamanote')->name('search.train.yamanote');

Route::post('/search/area', 'SearchController@areaList')->name('search.area.post');
Route::post('/search/area/favoriate', 'SearchController@favoriate')->name('search.area.favoriate');
Route::get('/search/areaList', 'SearchController@areaList')->name('search.areaList');

Route::post('/search/train', 'SearchController@trainList')->name('search.train.post');