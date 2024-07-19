<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        return "Aqui se mostraran todos los posts";
    }

    public function create() {
        return "Aqui se mostrara un formulario para crear un nuevo post";
    }

    public function show($post, $category) {
        if ($category) {
            return "Aqui se mostrara el post {$post} de la categoria {$category}";
        } else {
            return "Aqui se mostrara el post {$post}";
        }
    }
}
