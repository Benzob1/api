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
  return View::make('hello');
});

Route::group(['prefix' => 'v1'], function () {

  Route::resource('county', 'V1\\CountyController', ['only' => ['index', 'show']]);
  Route::resource('test', 'V1\\TestController', ['only' => ['index', 'show']]);

});