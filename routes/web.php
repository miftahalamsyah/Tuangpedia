<?php

use App\Http\Controllers\AdminCategoryController;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\DashboardController;
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

Route::get('/', function () {
    return view('home',[
        "title"=>"Bingung Mau Makan Dimana? Cari aja di TuangPedia!",
        "posts"=> Post::all(),
    ]);
});

Route::get('/about', function () {
    return view('about',[
        'title'=>'Tentang Kami'

    ]);
});

//pagination tema

Route::get('/daftarresto', [PostController::class, 'index']);

//halaman single post
Route::get('/daftarresto/{post:slug}', [PostController::class, 'show']);

//halaman categories
Route::get('/categories', function(){
    return view('categories', [
        'title' => 'Kategori Resto',
        'categories' => Category::all(),
    ]);
});

//halaman login
Route::get('/masuk', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/masuk', [LoginController::class,'authenticate']);
Route::post('/keluar', [LoginController::class, 'logout']);

//halaman register
Route::get('/registrasi', [RegisterController::class,'index'])->middleware('guest');
Route::post('/registrasi', [RegisterController::class,'store']);

//dashboard
// Route::get('/dashboard',[DashboardController::class,'index'])->middleware('auth');
Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('admin');

//Slug otomatis
Route::get('/dashboard/daftarresto/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('admin');

//dashboard post
Route::resource('/dashboard/daftarresto', DashboardPostController::class)->middleware('admin');

//dashboard post
Route::resource('/dashboard/categories', DashboardPostController::class)->middleware('admin');