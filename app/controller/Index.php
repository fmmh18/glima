<?php

namespace app\controller;

use app\model\infoModel;

class Index extends Controller
{
    public static function index()
    {
        $infos = new infoModel();
        $info = $infos->detail_info();
         
        return self::view('home/index',['infos'=>$info]);
    }
}