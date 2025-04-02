<?php

namespace App\Controllers;

class Login extends BaseController {

    private $view = 'portal/login/'; //definimos una carpeta base
    private function load_data() {
        $data = array();

        $data['nombre_pagina'] = 'Blockbuster';
        $data['titulo_pagina'] = 'Dashboard';  
        return $data;
    }//end load data

    private function create_View($name_view = ''){
        return view($this->view.$name_view, $this->load_data());
    }//end create view

    public function index(){
        return $this->create_View('index');

    }

    public function register(){
        return $this->create_View('register');
    }

    public function forgotPassword(){
        return $this->create_View('forgot_password');
    }
}