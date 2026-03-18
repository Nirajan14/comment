<?php
use Illuminate\Support\Facades\Route;
use Nirajan\Comment\Http\Controllers\CommentController;

Route::post('/comments/store', [CommentController::class, 'store'])
    ->name('comments.store');