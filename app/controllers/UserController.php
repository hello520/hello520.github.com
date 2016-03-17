<?php
class UserController extends BaseController {

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
	public function index(){
		if(View::exists('user.index')){

			return $view = View::make('user.index');

		}else{

		}
		//return $view = View::make('index')->nest('user', 'user.index');
	}
	public function userInfo()
	{
		$results = DB::select('select * from id');

		$this->layout->content =  View::make('user.userInfo');
		//$this->layout->content =  View::make('user')->with(array('data'=>$results));
	}
	public function getUser($id){
		//$user = User::all();
		//$user_one = User::find(1);
		//$model = User::take(1)->get();
		User::chunk(1, function($users)
		{
			foreach ($users as $user)
			{
				var_dump($user);
			}
		});

		//return View::make('userinfo',array('results'=>111000));

	}
}
