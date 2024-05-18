<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts',[
            "title" =>"All post",
            "posts" => Post::all()
            
        ]);
    }

    public function show(Post $post){
        return view('post' , [
            "title" => "singel post",
            "post" =>$post
    
        ]);
    }
}
