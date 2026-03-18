<?php

namespace Nirajan\Comment;

use Illuminate\Support\ServiceProvider;

class CommentServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadRoutesFrom(__DIR__.'/routes/admin.php');

        $this->loadViewsFrom(__DIR__.'/resources/views', 'comment');

        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

        $this->publishes([
            __DIR__.'/config/comment.php' => config_path('comment.php'),
        ], 'comment-config');
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/config/comment.php',
            'comment'
        );
        if (file_exists(__DIR__ . '/Helpers/helper.php')) {
            require_once __DIR__ . '/Helpers/helper.php';
        }
    }
}
