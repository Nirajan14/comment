<?php
use Illuminate\Support\Facades\Route;
use Nirajan\Comment\Http\Controllers\Admin\CommentAdminController;  

Route::middleware(config('comment.admin_middleware'))
    ->prefix(config('comment.admin_url_prefix', 'AdminActivity') . '/comments')
    ->name('admin.comments.')
    ->group(function () {
        Route::get('/', [CommentAdminController::class, 'index'])->name('index');
        Route::post('/approve/{id}', [CommentAdminController::class, 'approve'])->name('approve');
        Route::delete('/{id}', [CommentAdminController::class, 'destroy'])->name('destroy');
    });