<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function(){
    Route::get('/post', [PostController::class, 'index'])->name('admin.posts');
    Route::get('/posts/create', [PostController::class, 'create'])->name('admin.posts.create');
    Route::post('/post', [PostController::class])->name('admin.posts.store');
    Route::get('post/{post}',[PostController::class, 'show'])->name('admin.post.show');
    Route::get('post/{post}/edit',[PostController::class, 'edit'])->name('admin.post.edit');
    Route::put('post/{post}',[PostController::class, 'update'])->name('admin.post.update');
    Route::delete('post/{post}',[PostController::class, 'delete'])->name('admin.post.delete');
    Route::put('post/{post}/like',[PostController::class, 'like'])->name('admin.post.like');
});
