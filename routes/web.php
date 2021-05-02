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

Route::get('/', 'HomeController@index')->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/edit/{id}', 'HymnController@edit_hymn')->name('edit.hymn');
Route::get('/delete/{id}', 'HymnController@delete_hymn')->name('edit.hymn');

//Category
Route::get('/category', 'CategoryController@add_category')->name('category.add');
