<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
     public function inicio()
    {
        return view('welcome');
    }

    public function fotos()
    {
        return view('fotos');
    }

    public function noticias()
    {
        return view('blog');
    }

    public function nosotros($nombre = null)
    {
        // Suponer que esto biene desde una base de datos
        $equipo = ['Ignacio', 'Juanito', 'Pedrito'];

        // Son dos formas diferentes de hacer lo mismo
        //return view('nosotros',['equipo'=>$equipo]);
        return view('nosotros', compact('equipo', 'nombre'));
    }
}
