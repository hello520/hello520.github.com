<?php
/**
 * Created by PhpStorm.
 * User: kt
 * Date: 16/3/17
 * Time: 上午9:41
 */
class ApiController extends BaseController{
    function get(){
        $user_count = User::count();
        $app_count = Application::count();
        $user_del_count = User::onlyTrashed()->count();
        $app_del_count = Application::onlyTrashed()->count();
        $data = array(
            'user'=>$user_count,
            'app'=>$app_count,
            'recycle'=>$user_del_count+$app_del_count
        );
return Response::json(array($data));
    }

}