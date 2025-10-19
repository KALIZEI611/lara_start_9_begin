<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserInfoController extends Controller
{
    public function showInfo($name,$username){
        return view('user' , ['name'=>$name,'username'=>$username]);
    }
}
