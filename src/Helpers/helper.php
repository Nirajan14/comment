<?php

if (!function_exists('comment_post_url')) {
    function comment_post_url($commentable)
    {
        if (!$commentable) {
            return '#';
        }

        if (config('comment.post_route.callback')) {
            return call_user_func(
                config('comment.post_route.callback'),
                $commentable
            );
        }

        $routeName = config('comment.post_route.name', 'posts.detail');
        $paramKey  = config('comment.post_route.param', 'id');

        $paramValue = $commentable->$paramKey ?? $commentable->id;

        return route($routeName, $paramValue);
    }
}