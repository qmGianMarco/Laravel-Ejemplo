<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    /* return "Welcome to hompage"; */
    return view('welcome');
});

Route::get('/posts', function () {
    return "Aqui se mostraran todos los posts";
});

/* RUTAS CON VARIABLES */
/* Route::get('/posts/{post}', function ($post) {
    return "Aqui se mostrara el post {$post}";
}); */

Route::get('/posts/{post}/{category?}', function ($post, $category = null) {
    if ($category) {
        return "Aqui se mostrara el post {$post} de la categoria {$category}";
    } else {
        return "Aqui se mostrara el post {$post}";
    }
    
});