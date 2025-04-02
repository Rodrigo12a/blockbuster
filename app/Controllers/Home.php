<?php

namespace App\Controllers;

class Home extends BaseController
{
    private $view = 'portal/pages/'; //definimos una carpeta base
    private function load_data() {
        $data = array();

        $data['nombre_pagina'] = 'Blockbuster';
        $data['titulo_pagina'] = 'Dashboard';
        return $data;
    }//end load data

    private function create_View($name_view = ''){
        return view($this->view.$name_view, $this->load_data());
    }//end create view


    public function index(): string {
        return $this->create_View('index');
    }

    public function categorias(): string {
        return $this->create_View('categorias');
    }

    public function blog(): string {
        return $this->create_View('blog');
    }
}
