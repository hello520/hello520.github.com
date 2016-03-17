<?php
/**
 * Created by PhpStorm.
 * User: kt
 * Date: 16/3/17
 * Time: 上午9:41
 */
class IndexController extends BaseController{

    public function index(){
       return View::make('Index.index');
    }
    public function nav(){
        echo('//查询');
        $nav = DB::table('nav')->get();
        var_dump($nav);

        echo "//从数据库表中取得单一数据列";
        $nav = DB::table('nav')->first();
        var_dump($nav);

        echo '//从数据库表中取得单一数据列的单一字段';
        $nav = DB::table('nav')->where('id', 1)->pluck('name');
        var_dump($nav);

        echo '取得单一字段值的列表';
        $nav = DB::table('nav')->lists('name');
        var_dump($nav);

        echo '指定查询子句 (Select Clause)';

        $nav = DB::table('nav')->select('name', 'id')->get();

        $nav = DB::table('nav')->distinct()->get();

        $nav = DB::table('nav')->select('name as user_name')->get();
        echo('******************************************************');
        $nav = Nav::find(1);

        //var_dump($redis);
//var_dump($nav->name);
        return View::make('Index.nav');
    }
    public function nav_add(){
        $name = Input::get();
        $data['name'] = $name['name'];
        $id = DB::table('nav')->insertGetId($data);
        var_dump($id);
    }
}