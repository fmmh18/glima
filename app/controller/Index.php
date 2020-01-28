<?php

namespace app\controller;

use app\model\infoModel;

class Index extends Controller
{
    public static function index()
    { 
         
        return self::view('home/index');
    }
}