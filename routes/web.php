<?php

    use App\Http\Controllers\PostController;
    use App\Http\Controllers\CommentController;
    use Illuminate\Support\Facades\Route;

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/posts', [PostController::class, 'index']);
    Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
    Route::get('/comments', [CommentController::class, 'index'])->name('comments.index');
