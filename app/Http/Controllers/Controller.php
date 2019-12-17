<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function insert(Request $req){
      $name = $req->input('name');
      $email = $req->input('email');
      $message = $req->input('message');

      $data = array('name'=>$name,'email'=>$email,'message'=>$message);
      DB::table('contact')->insert($data);

      echo "success";
    }
}
