<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['titulo']='Página principal';
        echo view('fronts/head_view', $data);
        echo view('fronts/navbar_view');
        echo view('fronts/principal');
        echo view('fronts/footer_view');
    }
public function quienes_somos()
    {
       $data['titulo']='Quienes somos';
        echo view('fronts/head_view', $data);
        echo view('fronts/navbar_view');
        echo view('fronts/quienes_somos');
        echo view('fronts/footer_view');
    }
    public function acerca_de()
    {
        $data['titulo']='acerca de';
        echo view('fronts/head_view', $data);
        echo view('fronts/navbar_view');
        echo view('fronts/acerca_de');
        echo view('fronts/footer_view');
    }

    public function registro()
    {
        $data['titulo']='Registro';
        echo view('fronts/head_view', $data);
        echo view('fronts/navbar_view');
        echo view('back/usuario/registro');
        echo view('fronts/footer_view');
    }

    public function login()
    {
        $data['titulo']='Login';
        echo view('fronts/head_view', $data);
        echo view('fronts/navbar_view');
        echo view('back/usuario/login');
        echo view('fronts/footer_view');
    }
    
}
