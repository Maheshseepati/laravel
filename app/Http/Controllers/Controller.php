<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index(){
        $data['email']="ab@g.com";
        $data['name']="Name nnnn";
$list=array();
        for($i=0;$i<10;$i++)
        {
          $obj=new emp();
          $obj->name="hi".$i;
          $obj->email="ema@".$i;
          $list[]=$obj;
        }
        $data['actual']=$list;
        return view('hello_world', $data);
    }
}

class emp{
    public $name;
    public $email;
}