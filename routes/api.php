<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();

});
Route::post('create-song','ApiController@createSong');
Route::post('create-category','ApiController@createCategory');
Route::post('update-song/{id}','ApiController@updateSong');
Route::get('songs','ApiController@allSongs');
Route::get('single-song/{id}','ApiController@filterSong');
Route::post('/search', 'ApiController@search')->name('search');
