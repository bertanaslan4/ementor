<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InfoBlogRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' =>'required|string|max:255',
            'short_text'=>'required|string|max:255',
            'text'=>'required|string',
            'images'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'photo'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }

    public function messages(){
        return [
            'required' => 'The :attribute field is required.',
            'string' => 'The :attribute must be a string.',
            'max' => 'The :attribute may not be greater than :max characters.',
            'image' => 'The :attribute must be an image.',
        ];
    }
}
