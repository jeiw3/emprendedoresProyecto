<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {

        return view('layout/header').
        view('layout/nav').
        view('home'). 
        view('layout/footer');
    }

    public function single(){
        return view('layout/header').
        view('layout/nav').
        view('single'). 
        view('layout/footer');
    }
    
    public function contacto(){
        return view('layout/header').
        view('layout/nav').
        view('contacto'). 
        view('layout/footer');
    }

     public function conocenos(){
        return view('layout/header').
        view('layout/nav').
        view('conocenos'). 
        view('layout/footer');
    }
}
