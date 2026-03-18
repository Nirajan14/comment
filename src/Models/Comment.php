<?php

namespace Nirajan\Comment\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'commentable_id',
        'commentable_type',
        'content',
        'approved',
        'is_anonymous',
    ];

    public function commentable()
    {
        return $this->morphTo();
    }
}