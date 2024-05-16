<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;


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

    return view('posts',[

        "title" =>"posts",

        "posts" => Post::all()
        
    ]);
});





// halaman singgel post
Route::get('posts/{slug}' , function($slug) {

    return view('post' , [

        "title" => "singel post",

        "post" => Post::find($slug)

    ]);
});



