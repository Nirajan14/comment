<?php

namespace Nirajan\Comment\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Nirajan\Comment\Models\Comment;

class CommentAdminController extends Controller
{
    public function index()
    {
        $comments = Comment::latest()->paginate(10);
        return view('comment::admin.index', compact('comments'));
    }

    public function approve($id)
    {
        $comment = Comment::findOrFail($id);
        $comment->approved = true;
        $comment->save();

        return redirect()->route('admin.comments.index')->with('success', 'Comment approved successfully.');
    }

    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);
        $comment->delete();

        return redirect()->route('admin.comments.index')->with('success', 'Comment deleted successfully.');
    }
}