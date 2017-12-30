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
    return view('frontend\landing');
});

Route::get('auth/github', 'ApiController@redirectToProviderGithub');
Route::get('auth/github/callback', 'ApiController@handleProviderCallbackGithub');

Route::get('auth/google', 'ApiController@redirectToProviderGoogle');
Route::get('auth/google/callback', 'ApiController@handleProviderCallbackGoogle');

Route::get('auth/facebook', 'ApiController@redirectToProviderFacebook');
Route::get('auth/facebook/callback', 'ApiController@handleProviderCallbackFacebook');

//Testing ground
Route::get('test', 'TestController@index');
Route::post('test/subt', 'TestController@subt');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
