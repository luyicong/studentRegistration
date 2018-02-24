<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
        $query = db('user')->select();

        halt($query);
    }
}
