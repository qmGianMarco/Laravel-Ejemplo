<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
/*  public function index() {
        return "Welcome to Homepage";
    } */

    /* La funcion __invoke se activa automaticamente cuando se llama a la clase */
    public function __invoke() {
        return "Welcome to Homepage";
    }
}
