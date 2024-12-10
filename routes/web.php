<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


use function Pest\Laravel\post;

// Route::get('/', function () {
//     return view('welcome');
// });

//Route::view('nosotros','about'); http://miprimerherd.test/nosotros nosotros es la URL, about es el nombre del blade

// $posts = [
//     ['title' => 'First post'],
//     ['title' => '2 post'],
//     ['title' => '3 post'],
//     ['title' => '4 post'],
// ];

Route::view('/','welcome')->name('home');
Route::view('contacto','contact')->name('contact');

// Route::get('blog', PostController::class)->name('blog'); controlador invocable: util cuando solo tiene 1 accion o metodo
Route::get('blog', [PostController::class, 'index'] )->name('blog');



Route::view('nosotros','about')->name('about'); 
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
