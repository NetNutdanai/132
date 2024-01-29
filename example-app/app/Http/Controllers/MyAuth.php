<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MyAuth extends Controller
{
    //
    function login_view(){
        return view('login');
    }

    function login_process(Request $req){

    }

    function logout_process(){

    }

    function register_view(){
        return view('register');
    }

    function register_process(Request $req){
        $req->validate{[
            'name' => 'required',
            'email' => 'required|email|unique:users'
        ]};
        $name = $req->input('name');
        $email = $req->input('email');
        $password = $req->input('password');

        User::created(['name' => $name ,'email' => $email , 'password' => $password]);

        return Redirect::to('login');
    }
}
