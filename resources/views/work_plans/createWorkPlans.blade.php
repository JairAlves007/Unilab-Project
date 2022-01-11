@extends('layouts.main')

@section('title', 'Crie Um Plano De Trabalho')

@section('content')

@include('layouts.navbar')

<div class="d-flex">

  @include('layouts.sidebar')

  <div class="form-create bg-white m-2">

    <h1 class="titulo">Crie um Plano de Trabalho</h1>

    <form class="form-type-4" action="{{ route('works_plans.store', $project) }}" method="POST"
      enctype="multipart/form-data">
      @csrf

      <div id="container">

          <div class="row">
            <div class="col">

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="title">Título</label>
                </div>
                <input type="text" name="title" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}"
                  id="title">

                <div class="invalid-feedback">
                  @foreach ($errors->get('title') as $error)
                  {{ $error }}
                  @endforeach
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col">

              <label class="input-group-text" for="content">Descrição Completa</label>

              <textarea class="form-control {{ $errors->has('content') ? 'is-invalid' : '' }}" name="content"
                id="content" rows="3"></textarea>

              <div class="invalid-feedback">
                @foreach ($errors->get('content') as $error)
                {{ $error }}
                @endforeach
              </div>

            </div>
          </div>
          <div class="row">

            <div class="col">

              <label class="input-group-text" for="abstract">Descrição Resumida</label>

              <textarea class="form-control {{ $errors->has('abstract') ? 'is-invalid' : '' }}" name="abstract"
                id="abstract" rows="3"></textarea>

              <div class="invalid-feedback">
                @foreach ($errors->get('abstract') as $error)
                {{ $error }}
                @endforeach
              </div>

            </div>

          </div>

          <div class="row">
            <div class="col">

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="references">Referências</label>
                </div>
                <input type="url" name="references"
                  class="form-control {{ $errors->has('references') ? 'is-invalid' : '' }}" id="references">

                <div class="invalid-feedback">
                  @foreach ($errors->get('references') as $error)
                  {{ $error }}
                  @endforeach
                </div>
              </div>
            </div>
          </div>

          <div class="row">

            <div class="col">

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="bolsistas">Cadastre Bolsistas</label>
                </div>
                <select class="form-control {{ $errors->has('bolsistas') ? 'is-invalid' : '' }}" id="bolsistas">

                  <option value="" id="option-checked">
                    Selecione
                  </option>

                  @foreach ($candidates as $candidate)
                  @if (!$candidate->at_work_plan)
                  <option value="{{ $candidate->users_id }}"
                    label="{{ $candidate->registration }} - {{ $candidate->name }}">
                    @endif

                    @endforeach

                </select>

                <div class="invalid-feedback">
                  @foreach ($errors->get('bolsistas') as $error)
                  {{ $error }}
                  @endforeach
                </div>
              </div>
            </div>
          </div>
          <div id="res-bolsistas">
          </div>


      </div>

      <button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Criar</button>
    </form>
  </div>

</div>

@section('script')
<script>
  $('#bolsistas').on('change', () => {

         var bolsista_id = $('#bolsistas').find('option:selected').val();
         var bolsista_name_registration = $('#bolsistas').find('option:selected').attr('label');

         $('#res-bolsistas').append(`<p>${bolsista_name_registration}</p>`);

         $('#res-bolsistas')
            .append(`

               <input
                  type="hidden"
                  name="bolsistas[]"
                  value='${bolsista_id}'
               />

            `);

         $('#bolsistas').find('option:selected').remove();
         $('#option-checked').prop('selected', 'true');

      });
</script>

<script>
  tinymce.init({
    selector: 'textarea',
    plugins: 'a11ychecker advcode casechange export formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
    toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter pageembed permanentpen table',
    toolbar_mode: 'floating',
    tinycomments_mode: 'embedded',
    tinycomments_author: 'Author name',
  });
</script>
@endsection

@endsection
