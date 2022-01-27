<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormAttachProjectValidation extends FormRequest
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
            'institutes' => ['required'],
            'specialities' => ['required'],
            'big_areas' => ['required'],
            'areas' => ['required'],
            'sub_areas' => ['required'],
            // 'teachers' => ['required'],
            'archive' => ['required', 'file', 'mimes:pdf, docx, doc, odt']
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Insira Um Título Ao Projeto',
            'content.required' => 'Insira Uma Descrição Completa Ao Projeto',
            'abstract.required' => 'Insira Uma Descrição Resumida Ao Projeto',
            'references.required' => 'Preencha o campo de referência do Projeto',
            'institutes.required' => 'Marque Uma Instituição Ao Projeto',
            'specialities.required' => 'Marque Uma Especialidade Ao Projeto',
            'big_areas.required' => 'Marque Uma Grande Área Ao Projeto',
            'areas.required' => 'Marque Uma Área Ao Projeto',
            'sub_areas.required' => 'Marque Uma Sub Área Ao Projeto',
            // 'teachers.required' => 'Diga Quem É O Orientador Do Projeto',
            'archive.required' => 'Anexe O Arquivo Do Projeto',
            'archive.mimes' => 'Aceitamos Somente Arquivos Em Formato PDF, DOCX, DOC e ODT',
        ];
    }
}
