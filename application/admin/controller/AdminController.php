<?php

namespace app\admin\controller;

use app\admin\model\Admin;
use think\Controller;
use think\Db;
use think\Loader;
use think\Request;
use think\Session;

class AdminController extends BaseController
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index(Request $request)
    {
        $keyword = input('keword');
        //首页
        $admins = Admin::where('username','like',"%".$keyword."%")->order('id', 'desc')->paginate(3, false, ['query' => request()->param()]);
        //显示视图
        return view('index', compact('admins'));
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function add(Request $request)
    {
        //判断是否post提交
        if ($request->isPost()) {
            //得到数据
            $data = $request->Post();
            $validate =$this->validate($data,'Admin.add');
            if ($validate!==true) {
                return $this->error($validate);
            }
            // 获取表单上传文件 例如上传了001.jpg
            $file = request()->file('logo');
            // 移动到框架应用根目录/public/uploads/ 目录下
            if ($file) {
                $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
                if ($info) {
                    // 成功上传后 获取上传信息
                    $data['logo'] = DS . 'uploads' . DS . $info->getSaveName();
                    // 输出 42a79759f284b767dfcb2a0197904287.jpg
                    // echo $info->getFilename();
                } else {
                    // 上传失败获取错误信息
                    return $this->error($file->getError());
                }
            }
            //创建对象
            $admin = new Admin();
            $result = $admin->validate()->save($data);
            if ($result) {
                return $this->success('添加成功', 'admin/admin/index', '', 1);
            } else {
                return $this->error($admin->getError());
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
    public function edit(Request $request, $id)
    {

        $admin = Admin::get($id);
//        dump($admin);exit;
        //判断是否post提交
        if ($request->isPost()) {

            //得到数据
            $data = $request->Post();
            $validate = $this->validate($data, 'Admin.edit');
            if ($validate !== true) {
                return $this->error($validate);
            }
            //判断是否修改密码
            if (!$data['password']) {
                $data['password'] = $admin->password;
            }
            //图片
            $file = request()->file('logo');
            // 移动到框架应用根目录/public/uploads/ 目录下
            if ($file) {
                $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
                if ($info) {
                    // 成功上传后 获取上传信息
                    // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
                    $data['logo'] = "/" . 'uploads' . "/" . $info->getSaveName();
                } else {
                    // 上传失败获取错误信息
                    return $this->error($file->getError());
                }
            }else{
                $data['logo']= $admin->logo;
            }
            $result = $admin->save($data);
            if ($result) {
                return $this->success('修改成功', 'admin/admin/index', '', 1);
            }
        }
        //显示视图
        return view('edit', compact('admin'));
    }


    /**
     * 删除指定资源
     *
     * @param  int $id
     * @return \think\Response
     */
    public function del($id)
    {
        //通过id找到对象
        $admin = Admin::get($id);
        //删除数据
        if ($admin->delete()) {
            return $this->success('删除成功', 'admin/admin/index', '', 1);
        } else {
            return $this->error('删除失败');
        }

    }

    /*
     * 登录
     */
    public function login(Request $request)
    {
        //判断提交方式
        if ($request->isPost()) {
            //验证验证码
            if (!captcha_check($request->post('captcha'))) {
                //验证失败
                return $this->error("验证码错误");
            };

            $data = $request->Post();
            // dump($data);
//            验证
            $validate = Loader::validate('admin');
            if (!$validate->check($data)) {
                ($validate->getError());
            }
            //找出帐号密码
            $result = Db::table('admin')->where('username', $data['username'])->find();
            //dump($result);exit;
            //判断帐号密码
            if ($result && md5($data['password'], $result['password'])) {
                //存入Session
                Session::set('admin', $result);
//            halt(Session::get('admin'));
                //跳转
                return $this->success('登录成功', 'admin/admin/index', '', 1);
            } else {
                return $this->error('帐号或密码错误', 'admin/admin/login', '', 1);
            }
        }
        //显示视图
        return view('login');
    }

    /*
     * 退出
     */
    public function logout()
    {
      //清除session
        Session::set('admin','null');
        //跳转
        return $this->success('退出成功','login');
    }
}
