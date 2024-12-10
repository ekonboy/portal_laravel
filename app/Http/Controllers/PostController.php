<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index()
    {
        
    $posts = [
        ['title' => 'First post'],
        ['title' => '2 post'],
        ['title' => '3 post'],
        ['title' => '4 post'],
    ];
    return view('blog',['posts'=> $posts]);
    }
}
