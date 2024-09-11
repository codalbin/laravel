<?php

use App\Models\Post;
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
    return view('blog', ['title' => 'Blog', 'posts' => Post::all()]);
})->name('blog');

Route::get('/blog/{slug}', function($slug){

    $post = Post::find($slug);

    return view ('post', ['title' => 'Single post', 'post' => $post]) ;
});
