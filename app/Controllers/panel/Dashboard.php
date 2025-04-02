<?php

namespace App\Controllers\panel;
use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    private $view = 'panel/pages/'; //definimos una carpeta base
    private function load_data() {
        $data = array();

        $data['nombre_pagina'] = 'Blockbuster';
        $data['titulo_pagina'] = 'Dashboard';

        $breadcrumb = array(
            array(
                'href' => route_to('/dashboard'),
                'titulo_pagina' => 'Usuarios',
            ),
            array(
                'href' => '#',
                'titulo_pagina' => 'Usuario Nuevo',
            )
        );
        $data['breadcrumb'] = breadcrumb_panel($data['titulo_pagina'], $breadcrumb);

        return  $data;
    }//end load data

    private function create_View($name_view = ''){
        return view($this->view.$name_view, $this->load_data());
    }//end create view
    public function index(): string
    {
        return $this->create_View('index');
    }
}
