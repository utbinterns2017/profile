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
	
});

Route::get('/profile', [
	'uses' => 'PageController@getProfile',
	'as' => 'page.index'
	]);

Route::get('/view-courses', [
	'uses' => 'PageController@getCourses',
	'as' => 'page.courses'
	]);

Route::get('/dashboard', [
	'uses' => 'PageController@getDashboard',
	'as' => 'page.dashboard'
	]);

Route::get('/edit-profile', [
	'uses' => 'PageController@getEditProfile',
	'as' => 'page.editprofile'
	]);