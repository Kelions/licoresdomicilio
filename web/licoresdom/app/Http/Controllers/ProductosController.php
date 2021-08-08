<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function GetTipo(){

        $tipo = array();
        $tipo[] = "Pisco";
        $tipo[] = "Whisky";
        $tipo[] = "Cerveza";
        $tipo[] = "Vodka";
        $tipo[] = "Ron";
        $tipo[] = "Gaseosa";
        $tipo[] = "Comestible";
        return $tipo;
    }
}
