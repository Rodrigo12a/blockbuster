<?php

namespace App\Controllers;

class Login extends BaseController {
    public function index(){
        return view('Login');
    }

    public function index2($id){
        return "<h2>Funcion con parametros:  $id <h2>";
    }

    public function index3($id, $email){
        return "<h2>Funcion con parametros:  $id  email : $email <h2>";
    }
}