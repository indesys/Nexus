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

Route::get('/', [
	'as' => 'home',
	'uses' => 'Nexus\Core\Controllers\MainController@index'
]);
Route::get('credits', [
	'as' => 'credits',
	'uses' => 'Nexus\Core\Controllers\MainController@credits'
]);
Route::get('fleet', [
	'as' => 'fleet',
	'uses' => 'Nexus\Core\Controllers\FleetController@index'
]);

Route::group(['prefix' => 'wiki', 'namespace' => 'Nexus\Wiki\Controllers'], function()
{
	Route::get('/', [
		'as' => 'wiki.home',
		'uses' => 'WikiController@index'
	]);
});
