@extends('layouts.main')

@section('title', 'Crie Um Plano De Trabalho')

@section('content')

   @include('layouts.navbar')

   <div class="d-flex">

      @include('layouts.sidebar')

      <div class="form-create">

         <h1>Crie Um Plano De Trabalho</h1>

         <form action="{{ route('works_plans.store', $project) }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div id="form-area">

               <div class="form-content">
                  <div class="form-row">
                     <div class="form-group col-md-12">
                        <label for="title">Título</label>

                        <input type="text" name="title"
                           class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" id="title">

                        <div class="invalid-feedback">
                           @foreach ($errors->get('title') as $error)
                              {{ $error }}
                           @endforeach
                        </div>

                     </div>
                  </div>

                  <div class="form-row">
                     <div class="form-group col-md-6">

                        <label for="content">Descrição Completa</label>

                        <textarea class="form-control {{ $errors->has('content') ? 'is-invalid' : '' }}" name="content"
                           id="content" rows="3"></textarea>

                        <div class="invalid-feedback">
                           @foreach ($errors->get('content') as $error)
                              {{ $error }}
                           @endforeach
                        </div>

                     </div>

                     <div class="form-group col-md-6">

                        <label for="abstract">Descrição Resumida</label>

                        <textarea class="form-control {{ $errors->has('abstract') ? 'is-invalid' : '' }}" name="abstract"
                           id="abstract" rows="3"></textarea>

                        <div class="invalid-feedback">
                           @foreach ($errors->get('abstract') as $error)
                              {{ $error }}
                           @endforeach
                        </div>

                     </div>

                  </div>

                  <div class="form-row">
                     <div class="form-group col-md-12">

                        <label for="references">Referências</label>

                        <input type="url" name="references"
                           class="form-control {{ $errors->has('references') ? 'is-invalid' : '' }}" id="references">

                        <div class="invalid-feedback">
                           @foreach ($errors->get('references') as $error)
                              {{ $error }}
                           @endforeach
                        </div>

                     </div>
                  </div>

                  <div class="form-row">

                     <div class="form-group col-md-9">

                        <label for="bolsistas">Cadastre Bolsistas</label>

                        <input list="list-bolsistas"
                           class="form-control {{ $errors->has('bolsistas') ? 'is-invalid' : '' }}" id="bolsistas">

                        <datalist id="list-bolsistas">
                           @foreach ($students_users as $user)
                              <option data-id="{{ $user->id }}" value="{{ $user->name }}">{{ $user->registration }}</option>
                           @endforeach
                        </datalist>

                        <div class="invalid-feedback">
                           @foreach ($errors->get('bolsistas') as $error)
                              {{ $error }}
                           @endforeach
                        </div>

                     </div>

                     <div class="form-group col-md-3 d-flex justify-content-center" style="align-items: flex-end;">
                        <button type="button" class="btn btn-primary" id="btn-add-bolsista">Adicionar</button>
                     </div>
                  </div>

                  <div id="res-bolsistas">

                  </div>
               </div>

            </div>

            <button type="submit" class="btn btn-success">Criar</button>
         </form>
      </div>

   </div>

@section('script')
   <script>
      $('#btn-add-bolsista').click(() => {

         var bolsista_name = $('#bolsistas').val();
         var bolsista_id = $('#list-bolsistas').find('option:checked').val();
         alert(bolsista_id);
         // if (bolsista_name) {
         //    $('#res-bolsistas').append(`<p>${bolsista_name}</p>`);

         //    $('#res-bolsistas')
         //       .append(`
         //             <input 
         //                type="hidden"  
         //                name="bolsistas[]" 
         //                value='${bolsista_name}'
         //             >
         //          `);

         //    $('#bolsistas').val('');

         // }

      });
   </script>
@endsection

@endsection
