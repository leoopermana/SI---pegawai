<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function tampil_login(){
        return view('login');
    }

    public function tampil_register(){
        return view('register');
    }
}
