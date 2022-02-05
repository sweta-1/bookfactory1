<?php

namespace App\Http\Controllers\webpage;

use Illuminate\Http\Request;
use App\Model\Banner;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index(){
        $banner  =Banner::all();

         // echo $banner ;
         return view('webpages/index',['banner'=>$banner]);
        // echo'hello';
    }
}
