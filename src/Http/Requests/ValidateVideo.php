<?php

namespace LaravelLiberu\HowTo\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use LaravelLiberu\Helpers\Traits\FiltersRequest;

class ValidateVideo extends FormRequest
{
    use FiltersRequest;

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'video' => 'mimetypes:video/avi,video/mpeg,video/quicktime,video/mp4,video/webm',
            'name' => 'required|max:255',
            'description' => 'max:255',
        ];
    }
}
