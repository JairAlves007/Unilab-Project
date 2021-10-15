<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormCreateEdictRequest extends FormRequest
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
            'description' => ['required'],
            'archive' => ['required', 'file', 'mimes:pdf, docx, doc, odt'],
            'min_titulations_id' => ['required'],
            'categories_id' => ['required'],
            'submission_start' => ['required'],
            'submission_finish' => ['required'],
            'rate_start' => ['required'],
            'rate_finish' => ['required'],
            'execution_start' => ['required'],
            'execution_finish' => ['required']

        ];
    }

    public function messages() {
        return [

            'title.required' => 'Por Favor, Digite O Título Do Edital',
            'description.required' => 'Por Favor, Digite Uma Descrição Para O Edital',
            'archive.required' => 'Por Favor, Anexe Um Arquivo',
            'archive.file' => 'Por Favor, Anexe Um Arquivo',
            'archive.mimes' => 'Aceitamos Somente Arquivos Em Formato PDF, DOCX, DOC e ODT',
            'min_titulations_id.required' => 'Você Não Possui A Titulação Mínima',
            'categories_id.required' => 'Por Favor, Insira Uma Categoria',
            'submission_start.required' => 'Por Favor, Informe Uma Data De Início De Submissão',
            'submission_finish.required' => 'Por Favor, Informe Uma Data Do Encerramento de Submissão',
            'rate_start.required' => 'Por Favor, Informe Uma Data Do Início de Avaliação',
            'rate_finish.required' => 'Por Favor, Informe Uma Data Do Encerramento de Avaliação',
            'execution_start.required' => 'Por Favor, Informe Uma Data Do Início de Execução',
            'execution_finish.required' => 'Por Favor, Informe Uma Data Do Encerramento de Execução',

        ];
    }


}
