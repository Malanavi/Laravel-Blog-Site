<?php

namespace App\Http\Requests\Mail\Contact;

use Illuminate\Foundation\Http\FormRequest;

class SendRequest extends FormRequest
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
            'name' => 'required|string',
            'phone' => 'required|string',
            'comment' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Это поле необходимо для заполнения',
            'name.string' => 'Введены данные не строчного типа',
            'phone.required' => 'Это поле необходимо для заполнения',
            'phone.string' => 'Введены данные не строчного типа',
            'comment.required' => 'Это поле необходимо для заполнения',
            'comment.string' => 'Введены данные не строчного типа',
        ];
    }
}
