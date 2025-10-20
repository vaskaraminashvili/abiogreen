<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GeneralEmaiRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'text' => 'required|string|min:10',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'The name field is required.',
            'email.required' => 'The email field is required.',
            'email.email' => 'Please enter a valid email address.',
            'text.required' => 'The message field is required.',
            'text.min' => 'The message must be at least 10 characters.',
        ];
    }

    protected function getRedirectUrl()
    {
        return url()->previous().'#CONTACTUS';
    }
}
