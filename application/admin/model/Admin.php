<?php

namespace app\admin\model;

use think\Model;

class Admin extends Model
{
    //时间戳
    public $autoWriteTimestamp = true;
//获取器   获取性别
    public function getSexTextAttr($value,$data)
    {
        $sex= ['未知','男','女'];
        return $data['sex']?$sex[$data['sex']]:'数据不存在';
    }

    //修改器  修改密码
    public function setPasswordAttr($value)
    {
        return md5($value);
//        return password_hash($value,1);
    }
}
