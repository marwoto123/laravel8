<?php

use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home',[
        "title" =>"home",
        "name" => "sandika",
        "email" => "sandika@gmail.com",
        "image" => "sandika.jpg"
    ]);
});


Route::get('/about', function () {
    return view('about',[
        "title" =>"about",
        "name" => "sandika",
        "email" => "sandika@gmail.com",
        "image" => "sandika.jpg"
    ]);
});






Route::get('/posts', function () {

                $blog_posts = [
                    [
                        "title" => "judul pertama",
                        "slug" => "judul-pertama",
                        "author" => "sandika",
                        "body" => "Lorem Ipsum is simply dummy text of the printing and 
                        typesetting industry. Lorem Ipsum has been the indust
                        ext ever since the 1500s, when an unknown printer took "             
                    ],
                    [
                        "title" => "judul kedua",
                        "slug" => "judul-kedua",
                        "author" => "jono",
                        "body" => "Lorem Ipsum is simply dummy text of the printing and 
                        typesetting industry. Lorem Ipsum has been the indust
                        xt ever since the 1500s, when an unknown printer took "            
                    ],                  
                ];

    return view('posts',[
        "title" =>"posts",
        "posts" => $blog_posts
        // $blog_posts
        
    ]);
});





// halaman singgel post
Route::get('posts/{slug}' , function($slug) {

    $blog_posts = [
                [
                    "title" => "judul pertama",
                    "slug" => "judul-pertama",
                    "author" => "sandika",
                    "body" => "Lorem Ipsum is simply dummy text of the printing and 
                    typesetting industry. Lorem Ipsum has been the indust
                    ext ever since the 1500s, when an unknown printer took "             
                ],
                [
                    "title" => "judul kedua",
                    "slug" => "judul-kedua",
                    "author" => "jono",
                    "body" => "Lorem Ipsum is simply dummy text of the printing and 
                    typesetting industry. Lorem Ipsum has been the indust
                    xt ever since the 1500s, when an unknown printer took "            
                ]                  
                ];


            $new_post = [];
                    foreach($blog_posts as $post){
                        if($post["slug"] === $slug){
                            $new_post = $post;
                        }
                    }

    return view('post' , [
        "title" => "singel post",
        "post" => $new_post
    ]);
});



