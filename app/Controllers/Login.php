<?php

namespace App\Controllers;

class Login extends BaseController {
    public function index(){
        return 
        view('portal/login/index');

    }

    public function register(){
        return view('portal/components/header').
        view('portal/components/navbar').
        view('portal/login/register').
        view('portal/components/footer');
    }

    public function forgotPassword(){
        return view('portal/components/header').
        view('portal/components/navbar').
        view('portal/login/forgot_password').
        view('portal/components/footer');
    }
}