<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormValidationRequest extends FormRequest
{

  public function authorize()
  {
    return true;
  }

  public function rules()
  {
    $rules = [
      'name' => ['required', 'string'],
      'email' => ['required', 'email'],
      'niveis' => ['array', 'required']
    ];

    if ($this->isMethod('post')) {
      $rules['password'] = ['required', 'min:8'];
      $rules['password_confirmation'] = ['required', 'same:password'];
    }

    return $rules;
  }

  public function messages()
  {
    return [
      'name.required' => 'Por favor, digite o Nome do usuário',
      'name.string' =>  'O Valor do campo deve ser Letras',
      'email.required' => 'Por favor, digite o E-mail',
      'email.email' => 'Digite um E-mail Válido',
      'password.required' => 'Por favor, digite A Senha',
      'password.min' => 'A Senha deve ter no mínimo de 8 caracteres',
      'password_confirmation.required' => 'Por favor, confirme sua Senha',
      'password_confirmation.same' => 'Por favor, confirme sua Senha Corretamente',
      'niveis.required' => 'Por favor, marque um Nível de Acesso',
    ];
  }
}
