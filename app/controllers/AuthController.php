<?php
class AuthController extends BaseController {

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
	private $pagesize = 15;
	public function index(){
		$user = User::orderBy('id', 'asc')->paginate($this->pagesize);
		return View::make('user.index')->with(compact('user'));
	}
	public function add(){
		$user = new User;
		if($_POST){
			//更新数据
			if($_POST['id']){
				if(true !==$message = $user->updateUser())
				{
					return Redirect::back()->with('error','<strong>修改失败:'.$message.'</strong>');
				}
				// 添加成功
				return Redirect::to('/auth')->with('success', '<strong>修改成功 </strong>');
				//添加数据
			}else{
				if(true!== $message = $user->updateUser())
				{
					return Redirect::back()->with('error','<strong>添加失败:'.$message.'</strong>');
				}
				// 添加成功
				return Redirect::to('/auth')->with('success', '<strong> 添加成功 </strong>');
			}
		}else {
			return View::make('user.add');
		}
	}
	//编辑
	public function edit($id){
		$user = user::find($id);
		if($user){
			return View::make('user.add')->with(compact('user'));
		}else{
			return View::make('404');
		}
	}
	//删除
	public function delete($id){
		$user = User::find($id);
		if($user->delete()){
			return Redirect::to('/auth')->with('success', '<strong> 删除成功 </strong>');
		}else{
			return Redirect::back()->with('error','<strong>删除失败</strong>');
		}
	}
	//彻底删除删除
	public function fdelete($id){
		$user = User::withTrashed()->find($id);
		$user->forceDelete();
		return Redirect::to('/auth')->with('success', '<strong> 删除成功 </strong>');

	}
	//还原
	public function recycle($id){
		$user = User::withTrashed()->find($id);
		if($user->restore()){
			return Redirect::to('/auth')->with('success', '<strong> 还原成功 </strong>');
		}else{
			return Redirect::back()->with('error','<strong>还原失败</strong>');
		}
	}
	public function getlogin(){
		if(View::exists('user.login')){
			return $view = View::make('user.login');
		}else{
			return $view = View::make('errors.404');

		}
		//return $view = View::make('index')->nest('user', 'user.index');
	}

	public function postlogin(){
		// 凭证
		$credentials = array('user_name'=>Input::get('username'), 'password'=>Input::get('password'));
		// 是否记住登录状态
		$remember    = Input::get('remember-me', 0);
		// 验证登录
		if (Auth::validate($credentials)) {
			// 验证成功
			$user = Auth::getLastAttempted();
			Auth::login($user, $remember);
			return Redirect::intended();
		} else {
			// 登录失败，跳回
			return Redirect::back()->with('error','“用户名”或“密码”错误，请重新登录。');
		}
	}
	public function logout() {
		Auth::logout();
		return Redirect::to('/login');
	}

}
