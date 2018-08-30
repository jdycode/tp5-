<?php

namespace app\admin\controller;

use app\admin\model\AuthGroup;
use app\admin\model\Group;
use think\Controller;
use think\Request;

class GroupController extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        //首页
        $groups = AuthGroup::all();
        return view('group/index', compact('groups'));
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function add(Request $request)
    {
        //判断post提交方式
        if ($request->isPost()) {
            //得到所有数据
            $data = $request->post();
//            $group = new AuthGroup();
//            $result =$group->validate()->save($data);
            $validate =$this->validate($data,'AuthGroup.add');
            if ($validate!==true) {
                return $this->error($validate);
            }
            $result = AuthGroup::create($data);
            //判断
            if ($result) {
                return $this->success('添加成功', 'admin/group/index', '', 1);
            } else {
                return $this->error('添加失败','admin/group/add', '', 1);
            }
        }

        //显示视图
        return view('add');
   }


    /**
     * 显示编辑资源表单页.
     *
     * @param  int $id
     * @return \think\Response
     */
    public function edit(Request $request,$id)
    {
        $group = AuthGroup::get($id);
        if ($request->isPost()) {
            //得到所有数据
            $data = $request->post();
            //场景权限
            $validate =$this->validate($data,'AuthGroup.edit');
            if ($validate!==true) {
                return $this->error($validate);
            }
            $result = $group->save($data);
            //判断
            if ($result) {
                return $this->success('添加成功', 'admin/group/index', '', 1);
            } else {
                return $this->error('添加失败','admin/group/edit', '', 1);
            }
        }
        return view('edit',compact('group'));
    }


    /**
     * 删除指定资源
     *
     * @param  int $id
     * @return \think\Response
     */
    public function del($id)
    {
        //通过id找到单前对象
        $group = AuthGroup::get($id);
        //删除数据
        if($group->delete()){
            return $this->success('删除成功','admin/group/index','',1);
        }else{
            return $this->error('删除失败');
        }
    }
}
