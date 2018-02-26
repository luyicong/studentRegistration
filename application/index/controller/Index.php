<?php
namespace app\index\controller;

use think\Controller;

class Index extends Controller
{
    public function index()
    {
//        $query = db('user')->select();
//
//        halt($query);
        return $this->fetch();
    }
}
