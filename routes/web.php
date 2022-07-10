<?php

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;

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
    return view('home');
});

Route::get('/blog', [PostController::class, 'index'])->name('blog');
Route::get('/blog/{post:slug?}', [PostController::class, 'show'])->name('show');

Route::post('/blog/{post:slug}/comments', [CommentController::class, 'store']);


Route::get('categories/{category:slug}', function(Category $category) {
    return view('blog-index', [
        'posts' => $category->posts,
        'currentCategory' => $category,
        'categories' => Category::all()
    ]);
});

Route::get('post/{category:slug}', function(Category $category) {
    return view('blog.post', [
        'posts' => $category->posts,
        'currentCategory' => $category,
        'categories' => Category::all()
    ]);
});

Route::get('authors/{author}', function(User $author) {
    return view('blog.blog-index', [
        'posts' => $author->posts
    ]);
});

/**
 * 
 * Autoryzacja
 * 
 */

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');

Route::post('/', [SessionsController::class, 'destroy'])->middleware('auth');

/**
 * 
 * Admin
 *  
 */

 Route::get('admin/blog/create', [PostController::class, 'create']);
 Route::post('admin/blog', [PostController::class, 'store']);