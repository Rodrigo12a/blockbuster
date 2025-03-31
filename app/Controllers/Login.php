<?php

namespace App\Controllers;

class Login extends BaseController {
    public function index(){
        return view('portal/components/header').
        view('portal/components/navbar').
        view('portal/login/index').
        view('portal/components/footer');
    }

    public function register(){
        return view('login/components/header').
        view('login/register').
        view('login/components/footer');
    }

    public function forgotPassword(){
        return view('login/components/header').
        view('login/forgot_password').
        view('login/components/footer');
    }
}