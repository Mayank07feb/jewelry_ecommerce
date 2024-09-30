<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'title'=>'string|required',
            'summary'=>'required',
            'description'=>'nullable',
            'size'=>'nullable',
            'stock'=>"required|numeric",
            'cat_id'=>'required|exists:categories,id',
            'brand_id'=>'nullable|exists:brands,id',
            'child_cat_id'=>'nullable|exists:categories,id',
            'is_featured'=>'sometimes|in:1',
            'is_collection'=>'sometimes|in:1',
            'status'=>'required|in:active,inactive',
            'weight' => 'required|numeric',
//            'carat' => 'nullable|numeric',
//            'condition'=>'required|in:default,new,hot',
//            'price'=>'required|numeric',
            'discount'=>'nullable|numeric',
            'image.*' => 'image|mimes:png,jpg,jpeg',
            'material' => 'required',
            'carats.*' => 'required',
            'prices.*' => 'required',
         ];
    }
}
