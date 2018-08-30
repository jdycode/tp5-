<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/8/12
 * Time: 20:42
 */

namespace app\admin\validate;


use think\Validate;

class AuthGroup extends Validate
{
    //验证器
    protected $rule = [
        'title|管理组'  =>  'require',
    ];

//    protected $message  =   [
//        'username.require' => '名称必须',
//        'password.require'   => '密码不能为空',
//    ];

    protected $scene = [
        'add'  =>  ['title'],
        'edit'  =>  ['title'],
    ];

}