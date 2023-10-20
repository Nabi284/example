<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::prefix('user')->group(function(){
    Route::get('/post', [PostController::class, 'index'])->name('user.posts');
    Route::get('/posts/create', [PostController::class, 'create'])->name('user.posts.create');
    Route::post('/post', [PostController::class])->name('posts.store');
    Route::get('post/{post}',[PostController::class, 'show'])->name('user.post.show');
    Route::get('post/{post}/edit',[PostController::class, 'edit'])->name('user.post.edit');
    Route::put('post/{post}',[PostController::class, 'update'])->name('user.post.update');
    Route::delete('post/{post}',[PostController::class, 'delete'])->name('user.post.delete');
    Route::put('post/{post}/like',[PostController::class, 'like'])->name('user.post.like');
});
