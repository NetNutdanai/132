<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    private $myvar = "Hello World!";

    function __contruct(){

    }

    public function index(){
        return view("myfolder.mypage");
    }

    public function store(Request $req){
        $data['myinput'] = $req->input('myinput');
        return view('myroute',$data);
    }
}
