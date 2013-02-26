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

Route::get('/', function() {
  return Redirect::to('http://www.marist.edu/management/bureau');
});

Route::group(array('prefix' => 'v1'), function () {

  Route::resource('area', 'V1\\AreaController', array('only' => array('index', 'show')));
  Route::resource('county', 'V1\\CountyController', array('only' => array('index', 'show')));
  Route::resource('employment', 'V1\\EmploymentController', array('only' => array('index', 'show')));
  Route::resource('test', 'V1\\TestController', array('only' => array('index', 'show')));

});