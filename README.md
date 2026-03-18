# Laravel Comment Package

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)
[![Laravel Version](https://img.shields.io/badge/Laravel-10.x%20%7C%2011.x%20%7C%2012.x-red.svg)](https://laravel.com)

A simple, reusable Laravel package to add commenting functionality to any Eloquent model with minimal setup.

## Features

* **Polymorphic Support:** Add comments to any model (Posts, Products, etc.) using a single Trait.
* **Blade Components:** Includes ready-to-use components for comment forms and lists.
* **Admin Dashboard:** Built-in management interface at `/AdminActivity/comments`.
* **Security:** Integrated ReCAPTCHA validation support.
* **Moderation:** Optional comment approval system.
* **Customizable:** Easily configurable middleware, layouts, and routes.

---

## Installation

### 1. Require the package via Composer
```bash
composer require nirajan/comment
```

### 2. Publish Configuration and Migrations
```bash
php artisan vendor:publish --provider="Nirajan\Comment\CommentServiceProvider"
```

### 3. Run Migrations
```bash
php artisan migrate
```

---

## Configuration

After publishing, you can find the configuration file at `config/comment.php`. 

```php
return [
    'admin_middleware'   => ['web', 'admin'],
    'recaptcha_site_key' => env('RECAPTCHA_SITE_KEY'),
    'recaptcha_secret_key'=> env('RECAPTCHA_SECRET_KEY'),
    'admin_url_prefix'   => 'AdminActivity',
    'admin_layout'       => 'backend.layouts.master',
    'need_approval'      => false,
    'post_route' => [
        'name'     => 'posts.detail',
        'param'    => 'id',
        'callback' => null,
    ],
];
```

---

## Usage

### 1. Prepare your Model
Add the `HasComments` trait to any model you want to allow comments on.

```php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Nirajan\Comment\Traits\HasComments;

class Post extends Model
{
    use HasComments;
}
```

### 2. Add Blade Components
Insert the following components into your views (e.g., `show.blade.php`).

```html
<x-comment::comment-form :model="$post" />

<x-comment::comment-list :model="$post" />
```

---

## Admin Dashboard

You can manage, delete, and approve comments through the built-in dashboard:
`your-domain.com/AdminActivity/comments`

*Note: Ensure your `admin_layout` in the config file matches your actual admin theme layout.*

---

## License

The MIT License (MIT). Please see the License File for more information.

## Contributing

Feel free to submit issues or pull requests to improve this package.