<?php
/**
 * Created by PhpStorm.
 * User: kt
 * Date: 16/3/17
 * Time: 上午9:41
 */
class ApplicationController extends BaseController{

    private $pagesize = 15;
    private $category;
    private $attr;
    public function __construct(){
        $this->category = Config::get('category.category');
        $this->attr = Config::get('category.attr');

    }
    public function index(){
        $list = application::orderBy('order', 'desc')->orderBy('id', 'asc')->paginate($this->pagesize);
//        $category = Category::all()->toArray();
//        foreach($category as $key=>$val){
//            $data[$val['id']] = $val['name'];
//        }
        return View::make('app.index')->with(compact('list'))->with(array('category'=> $this->category))->with(array('attr'=> $this->attr));
    }
    public function add(){

//        $category = Category::orderBy('id', 'desc')->get();
//        foreach($category as $val){
//            $data[$val['attributes']['id']] = $val['attributes']['name'];
//        }
        $category = Config::get('category');
        return View::make('app.add')->with('category', $this->category)->with(array('attr'=> $this->attr));
    }
    public function updateApp(){
       // $file = Input::file('image');
        $application = new Application;
//        $path = '';
//        if($file){
//            $entension = $file -> getClientOriginalExtension(); //上传文件的后缀.
//            $newName=time().'.'.$entension;
//            $file -> move(public_path().'/uploads',$newName);
//            $path = '/uploads/'.$newName;
//
//        }
        if(true!== $message =  $application->updateApp())
        {
            return Redirect::back()->with('error','<strong>操作失败:'.$message.'</strong>');
        }
        // 添加成功
        return Redirect::to('/app')->with('success', '<strong> 操作成功 </strong>');
    }
//编辑
    public function edit($id){
        $obj = new Application();
        $application = $obj->getapplication($id);
//        $category = Category::orderBy('id', 'desc')->get();
//        foreach($category as $val){
//            $data[$val['attributes']['id']] = $val['attributes']['name'];
//        }
        if($application){
            return View::make('app.add')->with(compact('application'))->with(array('category'=> $this->category))->with(array('attr'=> $this->attr));
        }else{
            return View::make('404');
        }
    }
    //删除
    public function delete($id){
        $app = new Application;
        if($app->deleteApp($id)){
            return Redirect::to('/app')->with('success', '<strong> 删除成功 </strong>');
        }else{
            return Redirect::back()->with('error','<strong>删除失败</strong>');
        }
    }
    //彻底删除
    public function fdelete($id){
        $app = new Application;
        $app->fdeleteApp($id);
        return Redirect::to('/app')->with('success', '<strong> 删除成功 </strong>');

    }
    //还原
    public function recycle($id){
        $app = new Application;
        if($app->recycleApp($id)){
            return Redirect::to('/recycle')->with('success', '<strong> 还原成功 </strong>');
        }else{
            return Redirect::back()->with('error','<strong>还原失败</strong>');
        }
    }
    //排序
    public function order(){
        $data = Input::get();
        $data = substr($data['data'],0,-1);
        $data = explode(';',$data);
        foreach($data as $key=>$val){
            $val = explode(',',$val);
            $a['order'] = $val[0];
            $a['id'] = $val[1];
            $data[$key] = $a;
        }
        $app = new Application;
        if($app->orderApp($data)){
            exit(json_encode(array('code'=>200)));
        }else{
            exit(json_encode(array('code'=>-1)));
        }

    }
}