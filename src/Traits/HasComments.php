<?php
namespace Nirajan\Comment\Traits;
use Nirajan\Comment\Models\Comment;

trait HasComments
{
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->where('approved', true)->latest();
    }
}