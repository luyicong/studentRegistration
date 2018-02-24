<?php
/**
 * Created by PhpStorm.
 * User: zhujia100_L
 * Date: 2018/2/23
 * Time: 16:27
 */

namespace app\admin\controller;


use think\Controller;

class StudentList extends Controller
{
    //职位首页/职位列表
    public function index() {

//        $result = model('StudentList')->getPosListForAdmin();
//
//        $this->assign('posList',$result);

        $list = db('user')->select();

        $this->assign('list',$list);

        return $this->fetch();
    }

    //编辑信息
    public function edit(){

        return $this->fetch();
    }

    //预览学生报名信息

    public function preview() {

        return $this->fetch();
    }

    public function createpdf(){

        $this->pdf();
    }
}