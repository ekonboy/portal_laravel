<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\SavePostRequest;

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

    public function create()//Post $post quitamos esto y creamos una nueva instancia vacia
    {
        return view('posts.create', ['post' => new Post]);//devuelve una vista en la carpeta posts llamada create.blade.php
    }


    public function store(SavePostRequest $request)
    {
    


        //dd($validated);


        //return request(); //esto muestra un json del contenido del form
        //creamos aqui lo mismo que con tinker con Eloquen:
        //esta parte lo hacemos con el metodo create de eloquent: asi k comentamos las 4 lineas de abajo 
               // $post = new Post;
               // $post->title = $request->input('title');
               // $post->body = $request->input('body');
               // $post->save();
        //return $request->input('title');
       // return redirect()->route('posts.index');

        Post::create($request->validated());//pasamos la variable validated para no tener que escribir los campos a mano


        //session()->flash('status', 'Post created');//muestra un mensaje y dura solo 1 peticion

        return to_route('posts.index')->with('status', 'Post created!!');
    }


    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    public function update(SavePostRequest $request, Post $post)
    {
       


        // $post = Post::find($post); al poner Post en la funcion, puedo quitar esta linea
            //$post->title = $request->input('title');
            //$post->body = $request->input('body');
            //$post->save();


            //version1
            // $post->update([
            //     'title' => $request->input('title'),
            //     'body' => $request->input('body'),
            // ]);


            $post->update($request->validated());//llamamos al metodo validated a traves del request

        
        return to_route('posts.show', $post)->with('status', 'Post updated!');
    }


    public function destroy(Post $post){
            //return $post; muestra el json del post
            $post->delete();
            return to_route('posts.index')->with('status',  __('Post Deleted'));
    }

}
