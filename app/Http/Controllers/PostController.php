<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts',[
            "title" =>"posts",
            "posts" => Post::all()
            
        ]);
    }

    public function show($slug){
        return view('post' , [
            "title" => "singel post",
            "post" => Post::find($slug)
    
        ]);
    }
}
