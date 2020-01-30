<?php

    namespace app\model;

use Illuminate\Database\Eloquent\Model;

class pageModel extends Model
{
    protected $table = "pages";

    public function __construct()
    {
        parent::__construct();
    }

    public function get_page($slug = NULL)
    {
        return pageModel::where('slug','=',$slug)->get();

    }

    public function create($data)
    {


    }


}