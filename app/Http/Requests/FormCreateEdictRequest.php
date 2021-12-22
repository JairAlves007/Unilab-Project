<?php

namespace App\Http\Requests;

use App\Rules\SubmissionStartRule;
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
    $rules = [
      'edict_title' => ['required'],
      'description' => ['required'],
      'archive' => ['file', 'mimes:pdf, docx, doc, odt'],
      'min_titulations_id' => ['required'],
      'categories_id' => ['required'],
      'submission_start' => ['required', 'date', 'date_format:Y-m-d', 'after:yesterday'],
      'submission_finish' => ['required', 'date', 'date_format:Y-m-d', 'after:submission_start'],
      'rate_start' => ['required', 'date', 'date_format:Y-m-d', 'after:submission_finish'],
      'rate_finish' => ['required', 'date', 'date_format:Y-m-d', 'after:rate_start'],
      'execution_start' => ['required', 'date', 'date_format:Y-m-d', 'after:rate_finish'],
      'execution_finish' => ['required', 'date', 'date_format:Y-m-d', 'after:execution_start']
    ];

    if ($this->isMethod('post')) {
      $rules['archive'] = ['required', 'file', 'mimes:pdf, docx, doc, odt'];
    }

    return $rules;
  }

  public function messages()
  {
    return [
      'edict_title.required' => 'Digite o Título do Edital',
      'description.required' => 'Digite uma Descrição',
      'archive.required' => 'Anexe um Arquivo',
      'archive.file' => 'Anexe um Arquivo',
      'archive.mimes' => 'Aceitamos somente arquivos em formato PDF, DOCX, DOC e ODT',
      'min_titulations_id.required' => 'Insira a Titulação Mínima',
      'categories_id.required' => 'Insira uma Categoria',
      'submission_start.required' => 'Informe uma data de Início de Submissão',
      'submission_finish.required' => 'Informe uma data do Encerramento de Submissão',
      'rate_start.required' => 'Informe uma data do Início de Avaliação',
      'rate_finish.required' => 'Informe uma data do Encerramento de Avaliação',
      'execution_start.required' => 'Informe uma data do Início de Execução',
      'execution_finish.required' => 'Informe uma data do Encerramento de Execução',
      'submission_start.after' => 'A data de Início do Período de Submissão deve ser maior que Hoje',
      'submission_end.after' => 'A data de término do Período de Submissão deve ser maior que a de Início',
      'rate_start.after' => 'A data de Início do Período de Avaliação deve ser maior que a de término de Submissão',
      'rate_end.after' => 'A data de término do Período de Avaliação deve ser maior que a de Início',
      'execution_start.after' => 'A data de Início do Período de Execução deve ser maior que a de término de Avaliação',
      'execution_end.after' => 'A data de término do Período de Execução deve ser maior que a de Início',
    ];
  }
}
