<?php

namespace App\Controllers;
use App\Models\EmprendimientosModel;

class Home extends BaseController
{
    public function index(): string
    {

        //traemos la info de los emprendedores
        $empmodel=new EmprendimientosModel;
        $emprendimientos = $empmodel ->select('id,nombre,slogan,categoria,nomcarpeta')->findAll();
        $data=[
            'emprendimientos'=>$emprendimientos
        ];
      

        return view('layout/header').
        view('layout/nav').
        view('home',$data). 
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
