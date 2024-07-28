<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

//di postman harus manggil localhost:8000/api/posts

Route::get('/posts',[PostController::class, 'index']) ->middleware(['auth:sanctum']);
// memanggil controller dan method index

Route::get('/posts/{id}',[PostController::class, 'show'])->middleware (['auth:sanctum']);
//show detail

Route::get('/posts2/{id}',[PostController::class, 'show2']);