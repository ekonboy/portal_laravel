<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //
    public function index()
    {
        // $posts = DB::table('post')->get(); 
        $posts = Post::get();
        return view('posts.index',['posts'=> $posts]);
    }

    public function show(Post $post)
    {
        // return $post;
        // return Post::findOrFail($post);//sto devuelve un json, sirve para test
        //return $post;//sto devuelve un json, sirve para test
        return view('posts.show', ['post' => $post]);
    }

    public function create(Post $post)
    {
        return view('posts.create', ['post' => $post]);//devuelve una vista en la carpeta posts llamada create.blade.php
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required','min:4'],
            'body' => ['required' ]
        ]);

        //return request(); //esto muestra un json del contenido del form
        //creamos aqui lo mismo que con tinker con Eloquen:
        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();
        //return $request->input('title');

       // return redirect()->route('posts.index');




       session()->flash('status', 'Post created');//muestra un mensaje y dura solo 1 peticion

        return to_route('posts.index');
    }




}
