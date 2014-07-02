<?php

/*
|--------------------------------------------------------------------------
| Routes for the "Main" section
|--------------------------------------------------------------------------
|
*/

Route::get('/', [
	'as' => 'home',
	'uses' => 'Nexus\Core\Controllers\MainController@index'
]);
Route::get('credits', [
	'as' => 'credits',
	'uses' => 'Nexus\Core\Controllers\MainController@credits'
]);
Route::get('join', [
	'as' => 'join',
	'uses' => 'Nexus\Core\Controllers\MainController@join'
]);

Route::group(['prefix' => 'main', 'namespace' => 'Nexus\Core\Controllers'], function()
{
	Route::get('about_us', [
		'as' => 'about_us',
		'uses' => 'MainController@about'
	]);
	Route::get('news', [
		'as' => 'news',
		'uses' => 'MainController@news'
	]);
	Route::get('faqs', [
		'as' => 'faqs',
		'uses' => 'MainController@faqs'
	]);
	Route::get('join_us', [
		'as' => 'join_us',
		'uses' => 'MainController@join'
	]);
});

/*
|--------------------------------------------------------------------------
| Routes for the "Fleet" section
|--------------------------------------------------------------------------
|
*/

Route::group(['prefix' => 'fleet', 'namespace' => 'Nexus\Core\Controllers'], function()
{
	Route::get('/', [
		'as' => 'fleet',
		'uses' => 'FleetController@index'
	]);
	Route::get('ships', [
		'as' => 'ships',
		'uses' => 'FleetController@ships'
	]);
	Route::get('tf_ships/{id?}', [
		'as' => 'tf_ships',
		'uses' => 'FleetController@tf_ships'
	]);
	Route::get('task_forces', [
		'as' => 'task_forces',
		'uses' => 'FleetController@task_forces'
	]);
	Route::get('rules', [
		'as' => 'rules',
		'uses' => 'FleetController@rules'
	]);
	Route::get('departments', [
		'as' => 'departments',
		'uses' => 'FleetController@departments'
	]);
	Route::get('command_staff', [
		'as' => 'command_staff',
		'uses' => 'FleetController@command_staff'
	]);
});

/*
|--------------------------------------------------------------------------
| Routes for the "Wiki" section
|--------------------------------------------------------------------------
|
*/
Route::group(['prefix' => 'wiki', 'namespace' => 'Nexus\Wiki\Controllers'], function()
{
	Route::get('/', [
		'as' => 'wiki.home',
		'uses' => 'WikiController@index'
	]);
});
