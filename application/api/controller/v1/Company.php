<?php
/**
 * Created by PhpStorm.
 * User: zhujia100_L
 * Date: 2018/2/7
 * Time: 21:06
 */

namespace app\api\controller\v1;


use app\api\controller\Common;

class Company extends Common
{
    //获取企业列表
    public function getCompanyList() {
        $result = model('CompanyList')->getCompanyList();

        return show(config('code.success'), 'OK', $result, 200);
    }
}