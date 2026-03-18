<?php
namespace Nirajan\Comment\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class StoreCommentRequest extends FormRequest
{
    public function rules(Request $request)
    {
        if ($request->is_anonymous) {
            return [
                'comment' => 'required',
                //'g-recaptcha-response' => 'required'
            ];
        }
        return [
            'name' => 'required',
            'email' => 'required|email',
            'comment' => 'required',
            //'g-recaptcha-response' => 'required'
        ];
    }
}