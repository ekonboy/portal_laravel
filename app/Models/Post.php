<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //si el modelo se llama Post, Eloquent asume que la tabla tambien se llama Post en plural POSTS
    //use HasFactory;
    //protected $table = 'clientes'; //podemos cambiar el nombre de la tabla en tableplus y aqui crear un alias y se conectará al alias
    use HasFactory;
    protected $fillable = ['title', 'body'];
}
