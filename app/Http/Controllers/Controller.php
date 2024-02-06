<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function inde($id){
        $data['email']="ab@g.com";
        $data['name']="Name nnnn";
$list=array();
$specificEmp = null;
        for($i=0;$i<10;$i++)
        {
          $obj=new emp();
          $obj->id =$i;
          $obj->name="hi".$i;
          $obj->email="ema@".$i;
          $list[]=$obj;
          if($i == $id){
            $specificEmp =$obj;
          }
        }
        $data['actual']=$list;
        $data['specificEmp']=$specificEmp;
        return view('hello_world', $data);
    }
    public function hello(){
      $hello = "Hello New world";
      return view('welcome');
    }
}

class emp{
    public $id;
    public $name;
    public $email;
}