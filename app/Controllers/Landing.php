<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Landing extends BaseController {

    public function index(){
        return view('plantilla/header')
        .view('components/navbar')
        .view('landing/index').
        view('components/footer');
    }
}
