<?php
namespace Sunqiaoyu\Demo1;

class Dd{
    public function dd($params)
    {
        var_dump($params);
    }

    public function demoCurl()
    {
        $curl = new \Curl\Curl();
        $curl->get('https://fix.mysvip.cn/');
    }
}