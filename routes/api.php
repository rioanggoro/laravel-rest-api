<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

//di postman harus manggil localhost:8000/api/posts

Route::get('/posts',[PostController::class, 'index']);
// memanggil controller dan method index
