<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;

class RegisterController extends Controller
{
    public function show(){
        return view('register.register',[
           'title' => 'ini register'
        ]);
    }

    public function store(Request $req){
        $validate =$req->validate([
           'name' => 'required|max:255',
           'email' => 'required|email|unique:users',
           'password' => 'required|min:5|max:255',
            'confirm_password' => 'required|same:password'
        ]);

        $validate['password'] = Hash::make($validate['password']);
        User::create($validate);
        $req->session()->flash('success','Request berhasil,Silahkan login');

        return redirect('/login');
    }
}
