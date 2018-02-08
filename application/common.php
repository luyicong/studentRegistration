<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件

/**
 * 通用化API接口数据输出
 * @param int $status 业务状态码
 * @param string $message 信息提示
 * @param [] $data  数据
 * @param int $httpCode http状态码
 * @return array
 */
function show($status, $message, $data=[], $httpCode=200) {

    $data = [
        'status' => $status,
        'message' => $message,
        'data' => $data,
    ];

    return json($data, $httpCode);
}

//时间格式转换
function transfTime($ustime) {
    $ytime = date("Y-m-d H:i",$ustime);
    $rtime = date("n月j日 H:i",$ustime);
    $htime = date("H:i",$ustime);
    $time = time() - $ustime;
    $todaytime = strtotime("today");
    $time1 = time() - $todaytime;
    if($time < 60){
        $str = '刚刚';
    }else if($time < 60 * 60){
        $min = floor($time/60);
        $str = $min.'分钟前';
    }else if($time < $time1){
        $str = '今天'.$htime;
    }else{
        $str = $rtime;
    }
    return $str;
}