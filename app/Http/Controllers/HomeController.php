<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view("home.home");
    }
    public function loginUser(){
        return view("authentication.login-user");
    }
    public function regisTration(){
        return view("authentication.registration");
    }
    public function promptMe(){
        return view("home.prompt-me");
    }
}
