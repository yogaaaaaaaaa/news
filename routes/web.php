<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DasboardpostsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Facade;
use App\Http\Controllers\RegisterController;
use Illuminate\Http\Request;
use App\Models\Category;

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
    return redirect('/posts');
});

//route posts
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

//route categories
Route::get('/categories', function() {
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});

//route login & logout
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

//route register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

//route dashboard
Route::get('/dashboard', function() {
    return view('dashboard.index');
})->middleware('auth');

//route dashboard posts
Route::get('/dashboard/posts/checkSlug', [RegisterController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DasboardpostsController::class)->middleware('auth');

//route dashboard admin
Route::resource('/dashboard/admin', AdminController::class)->missing(function (Request $request) {
    return Redirect::route('dashboard.admin.index');
})->middleware('admin');

