<?php
use Illuminate\Database\Eloquent\SoftDeletingTrait;
class Application extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */

	use SoftDeletingTrait;
	protected $dates = ['deleted_at'];
	protected $table = 'app';

	public function updateApp(){
		$data = Input::get();
		if($data['id']){
			$rules = [
				'_token'   =>'required',
				'category' =>'required',
				'name' => 'required',
			];
		}else{
			$rules = [
				'_token'   =>'required',
				'category' =>'required',
				'name' => 'required|unique:app,name',
			];
		}
		$messages = [
			'category.required' => '分类不能为空',
			'name.required' => '应用名称不能为空',
			'name.unique' => '应用名称未修改',
			'_token.required'	=>	''
		];
		//var_dump($data);exit;
		$validator = Validator::make($data, $rules, $messages);
		if($validator->fails())
		{
			$messages = $validator->messages()->toArray();
			foreach($messages as $val){
				$messages = $val[0];
			}
			return $messages;
		}
		//更新数据
		if($data['id']){
			$app = self::find($data['id']);
		}else{
			$app = new application;
		}

		$app->category = $data['category'];
		$app->name = $data['name'];
		$app->desc = $data['desc'];
		//$app->is_new = $data['is_new'];
		//$app->is_recommend = $data['is_recommend'];
		$app->thumb = $data['thumb'];
		$app->status = $data['status'];
		$app->score = $data['score'];
		$app->download = $data['download'];
		//发送指令
		$app->instructions = $data['instructions'];
		$app->content = $data['content'];
		$app->order = $data['order'];
		$app->instructions = $data['instructions'];

		if($app->save()){
			return true;
		}else{
			return false;
		}
	}
	public function getapplication($id){
		$application = self::find($id);
		if(!$application){
			return false;
		}else{
			return $application;
		}
	}
	//删除
	public function deleteApp($id){
		$application = Application::find($id);
		return($application->delete());

	}
	//彻底删除
	public function fdeleteApp($id){
		$application = Application::withTrashed()->find($id);
		return($application->forceDelete());

	}
	//还原
	public function recycleApp($id){
		$application = Application::withTrashed()->find($id);
		return($application->restore());

	}
	//排序
	public function orderApp($order){
		foreach($order as $val){
			$app = self::find($val['id']);
			$app->order = $val['order'];
			if(!$app->save()){
				return false;
			}
		}
		return true;
	}
}
