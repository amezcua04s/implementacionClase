<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/post', [PostController::class, 'index']);
Route::get('/welcome', [PostController::class, 'view']);

Route::resource('/role', RoleController::class);
Route::resource('/post', PostController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard.posts.index');
});

Route::get('/create', function () {
    return view('dashboard.posts.create');
});

Route::get('/dashboard', function () {
    return view('dashboard.home');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
