<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Models\TasksList;
use Illuminate\Support\Arr ;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/test', function () {
//     return view('test');
// });

Route::get('/', function () {
    return view('home', ['title' => 'Home page', 'tasks' => TasksList::all()]);
});
Route::get('/home', function () {
    return view('home', ['title' => 'Home page', 'tasks' => TasksList::all()]);
})->name('home');

Route::get('/contacts', function () {
    return view('contacts', ['title' => 'Contacts']);
})->name('contacts');

Route::get('/blog', function () {
    // $posts = Post::with(['author', 'category'])->latest()->get() ; // A la place de all() on met ça pour ne pas tout charger, uniquement ceux qui sont en haut de la page
    $posts = Post::latest()->get() ; // Ajoute le with dans le Post.php
    return view('blog', ['title' => 'Blog', 'posts' => $posts]);
})->name('blog');

// Change id by slug if we define data in Model
Route::get('/blog/{post:slug}', function(Post $post){

    // $post = Post::find($id);

    return view ('post', ['title' => 'Single post', 'post' => $post]) ;
});

Route::get('/authors/{user:username}', function(User $user){
    $posts = $user->posts->load('category', 'author') ;
    return view ('blog', ['title' => count($posts) . ' Articles by ' . $user->name, 'posts' => $user->posts]) ;
});

Route::get('/categories/{category:slug}', function(Category $category){
    $posts = $category->posts->load('category', 'author') ;
    return view ('blog', ['title' => 'Articles in: ' . $category->name, 'posts' => $posts]) ;
});