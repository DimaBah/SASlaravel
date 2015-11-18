<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/user/{id}/{name?}',function($id=null,$name='john'){
	return $id .'-'.'user '.$name;
})->where(['name'=>'[A-Za-z]+','id'=>'[0-9]+']);
Route::get('user/profile/{id?}',array('uses'=>'UserController@getindex'));
Route::controller('profile','UserController');
Route::controllers(['profile'=>'UserController','test'=>'testController']);
Route::get('{id?}',['uses'=>'BaseController@getIndex']);

