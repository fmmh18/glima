<?php

namespace app\controller;

use app\model\pageModel;

class Page extends Controller
{
 
    public static function institucional()
    {
        $slug = 'institucional';
        $pages = new pageModel;
        $page = $pages->get_page($slug);

        return self::view('pages/index',['pages'=>$page]);
    

    } 
}