<?php
namespace app\api\controller;

class Index
{
    public function index()
    {
        $data = input('post.');

//        halt($data);
        $query = db('user')->insert($data);
        if($query){
            return  show(1, '恭喜您，报名成功！', [], 200);
        }else{
            return  show(0, '抱歉，网络出错了，稍后重试！', [], 200);
        }
    }
}
