<?php

namespace app\model;

use Illuminate\Database\Eloquent\Model;

class carouselModel extends Model
{
    protected $table = "carousel";

    public function __construct()
    {
        parent::__construct();
    }

    public function loadCarousel()
    {
        return carouselModel::where('status','=',1)->where('destac','=',1)->get();
    }

}