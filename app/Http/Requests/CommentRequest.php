<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'user_id' => 'nullable|exists:users,id',
            'post_id' => 'required|exists:posts,id',
            'comment' => 'required|string|max:1000',
            'status' => 'required|in:active,inactive',
            'replied_comment' => 'nullable|string|max:1000',
            'parent_id' => 'nullable|exists:post_comments,id',
        ];
    }
}
