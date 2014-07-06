<?php

Route::get('main/components', 'Nexus\Core\Controllers\MainController@components');

/*
|--------------------------------------------------------------------------
| Routes for the "Main" section
|--------------------------------------------------------------------------
*/

Route::get('/', [
	'as' => 'home',
	'uses' => 'Nexus\Core\Controllers\MainController@index'
]);

Route::group(['prefix' => 'main', 'namespace' => 'Nexus\Core\Controllers'], function()
{
	Route::get('about', [
		'as' => 'about',
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
	Route::get('join', [
		'as' => 'join',
		'uses' => 'MainController@join'
	]);
	Route::get('contact', [
		'as' => 'contact',
		'uses' => 'MainController@contact'
	]);
	Route::get('credits', [
		'as' => 'credits',
		'uses' => 'MainController@credits'
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
	Route::get('open_positions', [
		'as' => 'opl',
		'uses' => 'FleetController@opl'
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
