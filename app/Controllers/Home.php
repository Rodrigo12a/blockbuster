<?php

namespace App\Controllers;

class Home extends BaseController
{






    public function index(): string
    {
        return view('portal/components/header').
        view('portal/components/navbar').
        view('portal/pages/index').
        view('portal/components/footer');
    }

    public function categorias(): string
    {
        return view('portal/components/header').
        view('portal/components/navbar').
        view('portal/pages/categorias').
        view('portal/components/footer');
    }

    public function blog(): string
    {
        return view('portal/components/header').
        view('portal/components/navbar').
        view('portal/pages/blog').
        view('portal/components/footer');
    }
}
