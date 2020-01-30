<?php

namespace app\model;

use Illuminate\Database\Eloquent\Model;

class serviceModel extends Model
{
    protected $table = "services";

    public function __construct()
    {
        parent::__construct();
    }
    public function get_services()
    {
        return serviceModel::where('status','=',1)->get();
    }
}