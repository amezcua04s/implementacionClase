<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/post', [PostController::class, 'index']);
Route::get('/welcome', [PostController::class, 'view']);

Route::resource('api/role', RoleController::class);
Route::resource('api/post', PostController::class);

    

