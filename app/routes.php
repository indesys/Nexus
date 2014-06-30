<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

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
Route::get('main/about_us', [
	'as' => 'about_us',
	'uses' => 'Nexus\Core\Controllers\MainController@about_us'
]);
Route::get('main/news', [
	'as' => 'news',
	'uses' => 'Nexus\Core\Controllers\MainController@news'
]);
Route::get('main/faqs', [
	'as' => 'faqs',
	'uses' => 'Nexus\Core\Controllers\MainController@faqs'
]);

/*
|--------------------------------------------------------------------------
| Routes for the "Fleet" section
|--------------------------------------------------------------------------
|
*/

Route::get('fleet', [
	'as' => 'fleet',
	'uses' => 'Nexus\Core\Controllers\FleetController@index'
]);
Route::get('fleet/ship_listing', [
	'as' => 'ship_listing',
	'uses' => 'Nexus\Core\Controllers\FleetController@ship_listing'
]);
Route::get('fleet/tf_ships/{id?}', [
	'as' => 'tf_ships',
	'uses' => 'Nexus\Core\Controllers\FleetController@tf_ships'
]);
Route::get('fleet/task_forces', [
	'as' => 'task_forces',
	'uses' => 'Nexus\Core\Controllers\FleetController@task_forces'
]);
Route::get('fleet/rules', [
	'as' => 'rules',
	'uses' => 'Nexus\Core\Controllers\FleetController@rules'
]);
Route::get('fleet/departments', [
	'as' => 'departments',
	'uses' => 'Nexus\Core\Controllers\FleetController@departments'
]);
Route::get('fleet/command_staff', [
	'as' => 'command_staff',
	'uses' => 'Nexus\Core\Controllers\FleetController@command_staff'
]);


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
