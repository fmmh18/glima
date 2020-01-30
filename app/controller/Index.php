<?php

namespace app\controller;

use app\model\carouselModel;
use app\model\pageModel;
use app\model\serviceModel;

class Index extends Controller
{
    public static function index()
    { 
        $carousels  = new carouselModel;
        $services   = new serviceModel;
        $pages      = new pageModel;

        $carousel   = $carousels->loadCarousel();
        $service    = $services->get_services();
        $slug       = 'institucional';
        $page       = $pages->get_page($slug);

        return self::view('home/index',['carousels'=>$carousel,'services'=>$service,'pages'=>$page]);
    }
}