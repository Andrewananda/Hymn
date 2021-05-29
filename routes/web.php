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
Route::get('/delete/{id}', 'HymnController@delete_hymn')->name('delete.hymn');
Route::get('/hymn', 'HymnController@add_hymn')->name('hymn.add');
Route::get('/all_hymns', 'HymnController@all_hymns')->name('hymn.all');
Route::post('/create_hymn', 'HymnController@create_hymn')->name('hymn.create');


//Category
Route::get('/add_category', 'CategoryController@index')->name('category.add');
Route::get('/all_categories', 'CategoryController@all_category')->name('category.all');
Route::post('/create_category', 'CategoryController@create_category')->name('category.create');
Route::get('/edit_category/{id}', 'CategoryController@edit_category')->name('category.edit');
Route::post('/save_category/{id}', 'CategoryController@save_edit')->name('category.save_edit');
Route::get('/delete_category/{id}', 'CategoryController@delete_category')->name('category.delete');
