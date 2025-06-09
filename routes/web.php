<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Models\Post;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog', [MyController::class, 'createPost']);

Route::get('/fakebook', function () {
    return view('fakebook');
});


Route::get('/acceuilBlog', function () {
    $listePosts = \App\Models\Post::all();
    return view('acceuilBlog', ['list' => $listePosts]);
})->name('form:action');


Route::post('/acceuilBlog', [MyController::class, 'affichePost'])->name('form:action');

Route::get('/view', function () {
   $life = \App\Models\Post::where('title','=',"Salam")->get();
   return $life;
});

Route::get('/etude', [MyController::class, 'create']);
