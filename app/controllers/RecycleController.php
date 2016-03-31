<?php

class RecycleController extends BaseController  {



	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
//分类首页
	private $pagesize = '15';
	private $category = '';
	public function __construct(){
		$this->category = new Category;
	}
	public function index()
	{
		//echo 22;
		$users = User::onlyTrashed()->get();
		$app = Application::onlyTrashed()->get();
		return View::make('recycle.index')->with(compact('users'))->with(compact('app'));
	}
}
