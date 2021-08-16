<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required|min:5|max:30',
            'password' => 'required|min:5|max:20',
            'email' => 'required|min:5|max:25|email:rfc,dns|unique:users,email',
            'profile_file' => 'required',
            'roles' => 'required',
        ];
    }
    
    public function messages()
    {
        return [
            'name.required' => 'Nama wajib di isi',
            'name.min' => 'Nama minimal 5 karakter',
            'name.max' => 'Nama maksimal 30 karakter',
            'password.required' => 'Password wajib di isi',
            'password.min' => 'Password minimal 5 karakter',
            'password.max' => 'Password maksimal 20 karakter',
            'email.required' => 'Email wajib di isi',
            'email.min' => 'Email minimal 5 karakter',
            'email.max' => 'Email maksimal 25 karakter',
            'profile_file.required' => 'Profile wajib di isi',
            'roles.required' => 'Roles wajib di isi',

        ];
    }
}
