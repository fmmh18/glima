<?php

namespace app\controller;

use app\model\infoModel;

class Info
{

    public function index()
    {
        $infos = new infoModel;
    }
    public function detail_info()
    {
        $infos = new infoModel;
        return $infos->detail_info();
    }
}