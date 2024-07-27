<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Resources\PostResource;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        // return response()->json(['data'=> $posts]); // yang ditampilkan semua isi dalam table db 
        return PostResource::collection($posts); // dengan menggunakan resource bisa custom isi data
    }
}
