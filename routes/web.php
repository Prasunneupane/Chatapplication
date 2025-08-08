<?php

use App\Http\Controllers\PostController;
// use App\Http\Middleware\IsAdminMiddleware;
use App\Http\Controllers\UserController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// For Post Routes Start
Route::get('/post', [PostController::class,'index'])->name('post.index');
Route::post('store', [PostController::class,'store'])->name('post.store');
Route::get('/create', [PostController::class,'create'])->name('post.create');
Route::get('/edit/{id}', [PostController::class,'edit'])->name('post.edit');
Route::post('/update', [PostController::class,'update'])->name('post.update');
Route::post('/destroy', [PostController::class,'destroy'])->name('post.destroy');
// For Post Routes End

// For User Routes Start
Route::get('/user', [UserController::class,'index'])->name('user.index')->middleware('ensureTokenIsValid');
// For User Routes End


