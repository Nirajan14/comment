<?php

return [
    'admin_middleware' => ['web', 'admin'],
    'recaptcha_site_key' => env('RECAPTCHA_SITE_KEY'),
    'recaptcha_secret_key' => env('RECAPTCHA_SECRET_KEY'),
    "admin_url_prefix" => "AdminActivity",
    'admin_layout' => 'backend.layouts.master',
    'need_approval' => false,
    'post_route' => [
        'name' => 'posts.detail',
        'param' => 'id',
        'callback' => null,
    ],
    
];