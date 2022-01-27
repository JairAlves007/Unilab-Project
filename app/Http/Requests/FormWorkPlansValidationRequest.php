<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormWorkPlansValidationRequest extends FormRequest
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
            'title' => ['required'],
            'content' => ['required'],
            'abstract' => ['required'],
            'references' => ['required'],
            'bolsistas' => ['required']
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Por Favor, Coloque Um Título Para O Plano De Trabalho',
            'content.required' => 'Por Favor, Coloque Uma Descrição Completa Para O Plano De Trabalho',
            'abstract.required' => 'Por Favor, Coloque Uma Descrição Resumida Para O Plano De Trabalho',
            'references.required' => 'Por Favor, preencha o campo Referência do Plano De Trabalho',
            'bolsistas.required' => 'Por Favor, Coloque Um Bolsista Ao Plano De Trabalho',
        ];
    }
}
