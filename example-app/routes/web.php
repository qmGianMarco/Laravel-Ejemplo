<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

/* Pasamos de que las rutas usen funciones a que llamen clases con funciones*/
Route::get("/", HomeController::class); /* esta usando __invoke() */
Route::get("/posts", [PostController::class,"index"]);
Route::get("/posts/create", [PostController::class,"create"]);
Route::get("/posts/{post}", [PostController::class,"show"]);
/* Route::get("/posts/{post}/{category}", [PostController::class,"show"]); */ /* RUTAS CON VARIABLES */