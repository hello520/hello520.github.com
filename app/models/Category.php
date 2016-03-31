<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;
class Category extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */

	use SoftDeletingTrait;
	protected $dates = ['deleted_at'];
	protected $table = 'category';

	public function saveCategory(){
		$data = Input::get();
		$rules = [
			'_token'   =>'required',
			'category' => 'required|unique:category,name',
		];

		$messages = [
			'category.required' => '分类名称不能为空',
			'category.unique' => '该名称分类已存在',
			'_token.required'	=>	''
		];
		//var_dump($data);exit;
		$validator = Validator::make($data, $rules, $messages);
		if($validator->fails())
		{
			//var_dump($validator->messages()->get('name'));exit;
			$messages = $validator->messages()->get('category');
			return $messages[0];
		}
		$category = new Category;
		$category->name = $data['category'];
		if($category->save()){
			return true;
		}else{
			return false;
		}

	}
	//更新数据
	public function updateCategory(){
		$data = Input::get();
		$rules = array(
			'_token'   =>'required',
			'category' => 'required|unique:category,name',
			'id'       => 'required|numeric|min:1'
		);

		$messages = [
			'category.required' => '分类名称不能为空',
			'category.unique' 	=> '该名称分类已存在',
			'id.numeric'		=> '',
			'_token.required'	=>	''
		];
		$validator = Validator::make($data, $rules, $messages);
		if($validator->fails())
		{
			$messages = $validator->messages()->all();
			return $messages[0];
		}
		$category = self::find($data['id']);
		$category->name = $data['category'];
		if($category->save()){
			return true;
		}else{
			return false;
		}

	}
	//删除
	public function deleteCategory($id){
		$category = Category::find($id);
		return($category->delete());

	}
	public function getCategory($id){
		$category = self::find($id);
		if(!$category){
			return false;
		}else{
			return $category;
		}
	}

}
