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
	'uses' => 'Nexus\Controllers\MainController@index'
]);

Route::get('taskforces', function()
{
	$taskforces = TaskForceModel::all();

	return View::make('taskforces')->with('taskforces', $taskforces);
});
