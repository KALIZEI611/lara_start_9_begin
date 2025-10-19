<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function all(){
        return 'hello all';
    }
    public function show(){
        return 'hello show';
    }
}
