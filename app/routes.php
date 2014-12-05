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
	return Redirect::to('/login');
});

Route::get('/login', 'HomeController@login');

Route::post('/verify', 'HomeController@verify');

Route::get('/question',array('before' => 'auth', 'uses' => 'HomeController@question'));

Route::post('/answer', array('before' => 'auth', 'uses' => 'HomeController@answer'));
