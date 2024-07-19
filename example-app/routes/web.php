<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

/* Pasamos de que las rutas usen funciones a que llamen clases con funciones*/
Route::get("/", [HomeController::class]); /* esta usando __invoke() */
Route::get("/posts", [PostController::class,"index"]); 
Route::get("/posts/create", [PostController::class,"create"]);
Route::get("/posts/{post}/{category}", [PostController::class,"show"]);

/* Route::get('/', function () {
    return view('welcome');
}); */

/* Route::get('/posts', function () {
    return "Aqui se mostraran todos los posts";
}); */

/* RUTAS CON VARIABLES */
/* Route::get('/posts/{post}', function ($post) {
    return "Aqui se mostrara el post {$post}";
}); */

/* Route::get('/posts/{post}/{category?}', function ($post, $category = null) {
    if ($category) {
        return "Aqui se mostrara el post {$post} de la categoria {$category}";
    } else {
        return "Aqui se mostrara el post {$post}";
    }   
}); */