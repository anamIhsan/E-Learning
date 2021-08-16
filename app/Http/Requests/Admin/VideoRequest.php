<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class VideoRequest extends FormRequest
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
            'title' => 'required|string|min:5|max:250',
            'video' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Title wajib di isi',
            'title.string' => 'Title wajib teks',
            'title.min' => 'Title minimal 5 karakter',
            'title.max' => 'Title maksimal 25 karakter',
            'video' => 'Video wajib di isi'
        ];
    }
}
