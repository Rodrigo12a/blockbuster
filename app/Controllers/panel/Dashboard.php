<?php

namespace App\Controllers\panel;
use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index(): string
    {
        return view('panel/components/header').
        view('panel/components/navbar').
        view('panel/components/sidebar').
        view('panel/pages/index').
        view('panel/components/footer');
    }
}
