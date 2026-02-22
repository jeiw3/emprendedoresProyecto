<?php

namespace App\Controllers;
use App\Models\EmprendimientosModel;
use App\Models\ZonasModel;
use App\Models\ServiciosModel;


class Home extends BaseController
{
    public function index(): string
    {

        //traemos la info de los emprendedores
        $empmodel=new EmprendimientosModel;
        $emprendimientos = $empmodel ->select('id,nombre,slogan,categoria,nomcarpeta')->findAll();
        // traemos las zonas para el filtro 
        $zonasmodel= new ZonasModel;
        $zonasFiltro= $zonasmodel->select('zona')->findAll();
    


        $data=[
         'emprendimientos'=>$emprendimientos,
         'zonasFiltro'=>$zonasFiltro
        ];
        

      

        return view('layout/header').
        view('layout/nav').
        view('home',$data). 
        view('layout/footer');
    }

    public function single($idemp){
        //mostramos el single de cada emprendimiento
        $empmodel=new EmprendimientosModel;
        $emprendimientos = $empmodel ->select('categoria,nombre,slogan,descripcion,zona,telefono,horario,nomcarpeta')->where('id',$idemp)->first();

        //traemos los servicios del emprendimiento
        $serviciosmodel= new ServiciosModel;
        $serviciosemp = $serviciosmodel->select('servicio')->where('id_emp',$idemp)->findAll();
       
        
        $data=[
            'emprendimientos'=>$emprendimientos,
            'serviciosemp'=>$serviciosemp
        ];

        return view('layout/header').
        view('layout/nav').
        view('single',$data). 
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
