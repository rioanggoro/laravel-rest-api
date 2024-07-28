<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Resources\PostResource;
use App\Http\Resources\PostDetailResource;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all(); //mengambil semua data
        // return response()->json(['data'=> $posts]); // yang ditampilkan semua isi dalam table db 
        return PostResource::collection($posts); // dengan menggunakan resource bisa custom isi data
    }
    public function show ($id)
    {
        $post = Post::with('writer:id,username')->findOrFail($id); //yang muncul hanya id dan username
        return new PostDetailResource($post);
    }//get data berdasarkan id

    public function show2 ($id)
    {
        $post = Post::findOrFail($id);  //apabila tidak ada with maka muncul semua data dalam writer
        return new PostDetailResource($post);
    }
    
}
