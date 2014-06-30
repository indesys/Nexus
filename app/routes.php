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

Route::get('/', function()
{
	$depts = DepartmentModel::admin()->orderBy('order', 'asc')->get();

	return View::make('staff')->with('depts', $depts);
});

Route::get('taskforces', function()
{
	$taskforces = TaskForceModel::all();

	return View::make('taskforces')->with('taskforces', $taskforces);
});
