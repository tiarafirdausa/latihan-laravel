<?php

use App\Http\Controllers\AdminCategoryController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;

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

// Home
Route::get('/', function () {
    return view('home', [
        "title" => "Home",
    ]);
});

// About
Route::get('/about', function () {
    return view('about',[
        "title" => "About",
        "name" => "Tiara Firdausa",
        "email" => "tiarafa@gmail.com",
        "image" => "tiara.jpg"
    ]);
});

// Membuat Post
Route::get('/posts', [PostController::class, 'index']);

// single posts
Route::get('posts/{post:slug}', [PostController::class, 'show']);

// category
Route::get('/categories', function(Category $category){
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

// login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

//logout
Route::post('/logout', [LoginController::class, 'logout']);

// register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

//dashboard
Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

//checkSlug
Route::get('/dashboar/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

//admin category
Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');