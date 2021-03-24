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
