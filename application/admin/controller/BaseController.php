<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use think\Session;

class BaseController extends Controller
{
    public function __construct(Request $request)
    {
//构造路由
        $controller = $request->controller();
        $action = $request->action();
        $url = strtolower($controller . "/" . $action);
        //设置白名单
//        $data= [
//            'admin/login',
//            'admin/logout'
//        ];
        if (Session::get('admin') === null && !in_array($url, config('data'))) {
            return $this->success('你还没有登录', 'login');
        }
    }
}
