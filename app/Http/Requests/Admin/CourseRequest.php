<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
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
            'title' => 'required|string|min:5|max:25',
            'thumbnail_file' => 'required',
            'description' => 'required|string|min:5|max:100'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Title wajib di isi',
            'title.string' => 'Title harus di isi dengan teks',
            'title.min' => 'Title minimal 5 karakter',
            'title.max' => 'Title maksimal 25 karakter',
            'thumbnail_file.required' => 'Thumbnail wajib di isi',
            'description.required' => 'Description wajib di isi',
            'description.string' => 'Description harus di isi dengan teks',
            'description.min' => 'Description minimal 5 karakter',
            'description.max' => 'Description maksimal 100 karakter',

        ];
    }
}
