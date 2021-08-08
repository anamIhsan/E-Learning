<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'name' => 'required|string|min:3|max:150',
            'photo_file' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nama wajib di isi',
            'name.string' => 'Nama harus di isi dengan teks',
            'name.min' => 'Nama minimal 3 karakter',
            'name.max' => 'Nama maximal 150 karakter',
            'photo_file.required' => 'Photo wajib di isi'
        ];
    }
}
