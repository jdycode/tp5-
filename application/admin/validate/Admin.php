<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/8/12
 * Time: 20:42
 */

namespace app\admin\validate;


use think\Validate;

class Admin extends Validate
{
    //验证器
    protected $rule = [
        'username|用户名'  =>  'require|unique:admin',
        'password|密码' =>  'require',
        'captcha|验证码'=>'require|captcha',
    ];

//    protected $message  =   [
//        'username.require' => '名称必须',
//        'password.require'   => '密码不能为空',
//    ];

    protected $scene = [
        'add'  =>  ['username'],
        'edit'  =>  ['username'],
        'login'  =>  ['username','password','captcha'],
    ];

}