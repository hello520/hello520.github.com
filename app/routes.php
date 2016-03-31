<?php
//登陆
	# 登录
	Route::get('login',array('uses' => 'AuthController@getlogin'));
	Route::post('login',array('uses' => 'AuthController@postlogin'));

/*
|--------------------------------------------------------------------------
| 管理员后台
|--------------------------------------------------------------------------*/
Route::group(array('before' => 'auth'), function()
{
	Route::get('/','ApplicationController@index');

	Route::get('/category','CategoryController@index');
	Route::match(array('GET', 'POST'),'/category/add','CategoryController@add');

	Route::get('/category/edit/{id}', 'CategoryController@edit')->where('id', '[0-9]+');

	Route::get('/category/delete/{id}', 'CategoryController@delete')->where('id', '[0-9]+');

	Route::get('/logout','AuthController@logout');
	//Route::post('/category/add','CategoryController@postadd');
	Route::group(array('prefix' => 'app'), function()
	{
		Route::get('/','ApplicationController@index');
		Route::get('add','ApplicationController@add');
		Route::post('add','ApplicationController@updateApp');
		Route::get('edit/{id}','ApplicationController@edit')->where('id', '[0-9]+');
		Route::get('delete/{id}', 'ApplicationController@delete')->where('id', '[0-9]+');

		Route::get('fdelete/{id}', 'ApplicationController@fdelete')->where('id', '[0-9]+');
		Route::get('recycle/{id}', 'ApplicationController@recycle')->where('id', '[0-9]+');

		Route::get('order','ApplicationController@order');

	});
	Route::group(array('prefix' => 'auth'), function()
	{
		Route::get('/','AuthController@index');
		Route::get('add','AuthController@add');
		Route::post('add','AuthController@add');
		Route::get('edit/{id}','AuthController@edit')->where('id', '[0-9]+');
		Route::get('delete/{id}', 'AuthController@delete')->where('id', '[0-9]+');

		Route::get('fdelete/{id}', 'AuthController@fdelete')->where('id', '[0-9]+');
		Route::get('recycle/{id}', 'AuthController@recycle')->where('id', '[0-9]+');
	});
	Route::group(array('prefix' => 'recycle'), function()
	{
		Route::get('/','RecycleController@index');
	});

	Route::group(array('prefix' => 'api'), function()
	{
		Route::get('/','ApiController@get');
	});
});

