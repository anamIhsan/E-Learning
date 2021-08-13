<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|min:4|max:25',
            'email' => 'required|min:4|max:25|email:rfc,dns|unique:users,email',
            'password' => 'required|min:4|max:25',
            'photo_file' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nama wajib di isi',
            'name.string' => 'Nama wajib huruf',
            'name.min' => 'Nama minimal 4 huruf',
            'name.max' => 'Nama maksimal 25 huruf',
            'email.required' => 'Email wajib di isi',
            'email.min' => 'Email minimal 4 huruf',
            'email.max' => 'Email maksimal 25 huruf',
            'password.required' => 'Password wajib di isi',
            'password.min' => 'Password minimal 4 karakter',
            'password.max' => 'Password maksimal 25 karakter',
            'photo_file.required' => 'Photo wajib di isi'
        ];
    }
}
