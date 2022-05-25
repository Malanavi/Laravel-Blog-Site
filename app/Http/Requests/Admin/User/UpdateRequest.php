<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'email' => 'required|string|email|unique:users,email,' . $this->user_id,            'user_id' => 'required|integer|exists:users,id',
            'role' => 'required|integer',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Это поле необходимо для заполнения',
            'name.string' => 'Введены данные не строчного типа',
            'email.required' => 'Это поле необходимо для заполнения',
            'email.string' => 'Введены данные не строчного типа',
            'email.email' => 'Почта должна соответствовать формату name@mail.domain',
            'email.unique' => 'Пользователь с данным E-mail уже существует',
        ];
    }
}
