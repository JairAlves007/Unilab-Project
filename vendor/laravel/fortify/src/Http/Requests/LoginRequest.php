<?php

namespace Laravel\Fortify\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Laravel\Fortify\Fortify;

class LoginRequest extends FormRequest
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
        // Fortify::username() => 'required|string',
        // 'password' => 'required|string',
        return [
            'email' => ['required', 'string'],
            'password' => ['required', 'string', 'min:8']
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Por Favor, Digite Seu E-Mail!',
            'email.string' => 'O E-Mail Tem Que Ser Letras!',
            'password.required' => 'Por Favor, Digite Sua Senha!',
            'password.string' => 'A Senha Tem Que Ser Letras!',
            'password.min' => 'A Senha Tem Que Conter No Mínimo 8 Caracteres!'
        ];
    }
}
