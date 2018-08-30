<?php

namespace app\admin\controller;

use app\admin\model\AuthRule;
use think\Controller;
use think\Request;

class RuleController extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        //首页
        $rules = AuthRule::all();
        //显示视图
        return view('rule/index', compact('rules'));
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function add(Request $request)
    {
        $pathList = glob(dirname(__FILE__) . '/*.php');
        $res = [];
        foreach ($pathList as $key => $value) {
            $res[] = basename($value, '.php');
        }
        //系统中所有控制的方法怎么获取呢？遍历所有控制器就可以。
        $actionsAll = [];
        foreach ($res as $key => $value) {
            $actions[$value] = get_class_methods('app\admin\controller' . '\\' . $value);
        }
        foreach ($actions as $key => $value) {
            $pk[$key] = array_diff($value, $actions['BaseController']);
        }
//     dump($pk);exit;
        $ruls = [];
        foreach ($pk as $key => $value) {
            if (!$value) {
//             dump($value);exit;
                unset($value);
                continue;
            }
            foreach ($value as $v) {
                $p = strtolower(str_replace('Controller', '', $key));
                // dump($p);exit;
                $ruls[$p . '\\' . $v] = $p . '\\' . $v;
            }
        }
        //dump($ruls);exit;

        //判断post提交方式
        if ($request->isPost()) {
            //得到所有数据
            $data = $request->post();
//           dump($data);exit;
            $validate = $this->validate($data, 'AuthRule.add');
            if ($validate !== true) {
                return $this->error($validate);
            }
            $result = AuthGroup::create($data);
            //判断
            if ($result) {
                return $this->success('添加成功', 'admin/rule/index', '', 1);
            } else {
                return $this->error('添加失败', 'admin/rule/add', '', 1);
            }
        }
        //显示视图
        return view('add', compact('ruls'));
    }


}
