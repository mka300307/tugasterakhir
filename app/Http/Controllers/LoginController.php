<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function show (){
        return view('login.login',[
            'title' =>'ini login'
        ]);
    }
}
