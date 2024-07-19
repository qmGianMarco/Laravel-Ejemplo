<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /* La funcion __invoke se activa automaticamente cuando se llama a la clase */
    public function __invoke() {
        return view('home');
    }
}
