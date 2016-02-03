<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::get('/', 'UsersController@login_form');
    
	Route::post('/login/check','UsersController@post_login_form');
	Route::get('/logout',['uses' => 'UsersController@logout','as'=>'logout']);

	Route::get('/muffinbox', ['uses' => 'IndexController@muffinbox','as'=>'muffinbox']);
	Route::get('/muffinbox/dirs/{dir}', ['uses' => 'IndexController@muffinbox_dir','as'=>'muffinbox_dir'])->where('dir', '(.*)');
	Route::get('/muffinbox/dirs/', ['uses' => 'IndexController@muffinbox','as'=>'videos']);
	Route::get('/muffinbox/files/{file}', ['uses' => 'IndexController@muffinbox_file','as'=>'muffinbox_file'])->where('file', '(.*)');

	Route::get('/user/create','UsersController@create');
	Route::post('/user/create/check','UsersController@create_check');
});

