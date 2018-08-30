<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/8/12
 * Time: 20:42
 */

namespace app\admin\validate;


use think\Validate;

class AuthRule extends Validate
{
    //验证器
    protected $rule = [
        'name'  =>  'require',
    ];

    protected $scene = [
        'add'  =>  ['name'],
        'edit'  =>  ['name'],
    ];

}