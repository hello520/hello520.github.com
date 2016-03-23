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


Route::get('/','IndexController@index');

Route::group(array('prefix' => 'nav'), function () {
	Route::get('/','IndexController@nav');
	Route::post('/add','IndexController@nav_add');
});

Route::get('test', function()
{
	return 'test';
});
Route::get('userinfo', 'UserController@userInfo');
Route::get('user/{id}', 'UserController@getUser')->where('id', '[0-9]+');
Route::get('proc', 'ProcController@show');

Route::get('post/index','App/Controller/Home/PostController@index');

//Route::get('home','HomeController@index');
/*Route::get('home',function(){
		return 111;
});*/
Route::get('home/redirect',function(){
	return 111;
});
//Route::get('home','HomeController@index');
Route::get('home',function(){
	//return Response::view('hello')->header('Content-Type','no-cache');
	//$cookie = Cookie::make('name','tome');
	//return Response::view('hello')->withCookie($cookie);
	//return Redirect::to('home/redirect')->with('name','tome');
	//return Redirect::action('HomeController@index');
});

Route::get('user/index','UserController@index');

Route::get('base/set','BasesetController@index');


