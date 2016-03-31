<?php

class CategoryController extends BaseController  {



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
		$list = Category::orderBy('id', 'desc')->paginate($this->pagesize);

		return View::make('category.index')->with(compact('list'));
	}
	//添加分类
	public function add()
	{
		if($_POST){

			//更新数据
			if($_POST['id']){
				if(true !==$message = $this->category->updateCategory())
				{
					return Redirect::back()->with('error','<strong>修改失败:'.$message.'</strong>');
				}
				// 添加成功
				return Redirect::to('/category')->with('success', '<strong>修改成功 </strong>');
			//添加数据
			}else{
				if(true!== $message = $this->category->saveCategory())
				{
					return Redirect::back()->with('error','<strong>添加失败:'.$message.'</strong>');
				}
				// 添加成功
				return Redirect::to('/category')->with('success', '<strong> 添加成功 </strong>');
			}
		}else{
			return View::make('category.add');
		}
	}
	//编辑
	public function edit($id){
		$obj = new Category();
		$category = $obj->getcategory($id);
		if($category){
			return View::make('category.add')->with(compact('category'));
		}else{
			return View::make('404');
		}
	}
	//删除
	public function delete($id){
		if($this->category->deleteCategory($id)){
			return Redirect::to('/category')->with('success', '<strong> 删除成功 </strong>');
		}else{
			return Redirect::back()->with('error','<strong>删除失败</strong>');
		}
	}

}
