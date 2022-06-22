<?php

namespace App\Http\Requests\Admin\Service;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|string',
            'content' => 'required|string',
            'preview_image' => 'required|file',
            'main_image' => 'required|file',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Это поле необходимо для заполнения',
            'title.string' => 'Введены данные не строчного типа',
            'description.required' => 'Это поле необходимо для заполнения',
            'description.string' => 'Введены данные не строчного типа',
            'price.required' => 'Это поле необходимо для заполнения',
            'price.string' => 'Введены данные не строчного типа',
            'content.required' => 'Это поле необходимо для заполнения',
            'content.string' => 'Введены данные не строчного типа',
            'preview_image.required' => 'Это поле необходимо для заполнения',
            'preview_image.file' => 'Необходимо выбрать файл',
            'main_image.required' => 'Это поле необходимо для заполнения',
            'main_image.file' => 'Необходимо выбрать файл',
        ];
    }
}
