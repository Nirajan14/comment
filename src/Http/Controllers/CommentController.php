<?php
namespace Nirajan\Comment\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Nirajan\Comment\Models\Comment;
use Nirajan\Comment\Http\Requests\StoreCommentRequest;

class CommentController extends Controller
{
    public function store(StoreCommentRequest $request)
    {
        // if (!$this->verifyRecaptcha($request->input('g-recaptcha-response'))) {
        //     return back()->withErrors(['captcha' => 'Captcha failed']);
        // }
        
        $data = $request->validated();
        Comment::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'commentable_id' => $request->input('commentable_id'),
            'commentable_type' => $request->input('commentable_type'),
            'content' => $data['comment'],
            'approved' => !config('comment.need_approval', false),
            'is_anonymous' => $request->input('is_anonymous', false),
        ]);

        return back()->with('success', 'Comment submitted successfully and is pending approval.');
    }
    private function verifyRecaptcha($token)
    {
        $response = Http::asForm()->post(
            'https://www.google.com/recaptcha/api/siteverify',
            [
                'secret' => config('comment.recaptcha_secret_key'),
                'response' => $token,
            ]
        );

        return $response->json()['success'];
    }
}