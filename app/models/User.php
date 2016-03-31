<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	use SoftDeletingTrait;
	protected $dates = ['deleted_at'];
	protected $table = 'user';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');
//更新数据
	public function updateuser(){
		$data = Input::get();
		if(!$data['id']){
			$rules = array(
				'_token'   =>'required',
				'username' => 'required|unique:user,user_name',
				'password' => 'required',
			);

			$messages = [
				'username.required' => '用户名不能为空',
				'username.unique' 	=> '用户名已存在',
				'password.required' => '密码为空',
				'_token.required'	=>	''
			];
		}else{
			$rules = array(
				'_token'   =>'required',
				'username' => 'required|unique:user,user_name',
				'id' => 'required',
			);

			$messages = [
				'username.required' => '用户名不能为空',
				'username.unique' 	=> '用户名已存在',
				'id.required' 	    => '',
				'_token.required'	=>	''
			];
		}

		$validator = Validator::make($data, $rules, $messages);
		if($validator->fails())
		{
			$messages = $validator->messages()->all();
			return $messages[0];
		}
		if($data['id']){
			$user = self::find($data['id']);
		}else{
			$user = new User;
		}
		$user->user_name = $data['username'];
		if(!empty($data['password'])){
			$user->password = Hash::make($data['password']);
		}
		if($user->save()){
			return true;
		}else{
			return false;
		}

	}
}
