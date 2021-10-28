@extends('layouts.main')

@section('title', 'Crie Um Plano De Trabalho')

@section('content')

   @include('layouts.navbar')

   <div class="d-flex">

      @include('layouts.sidebar')

      <div class="form-create">

         <h1>Crie Um Plano De Trabalho</h1>

         <form action="{{ route('works_plans.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div id="form-area">
               <div class="form-content">
                  <div class="form-group">
                     <label for="title">Título</label>
                     <input type="text" name="title" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}"
                        id="title">

                     <div class="invalid-feedback">
                        @foreach ($errors->get('title') as $error)
                           {{ $error }}
                        @endforeach
                     </div>

                  </div>

                  <div class="form-group">

                     <label for="content">Descrição Completa</label>

                     <textarea class="form-control {{ $errors->has('content') ? 'is-invalid' : '' }}" name="content"
                        id="content" rows="3"></textarea>

                     <div class="invalid-feedback">
                        @foreach ($errors->get('content') as $error)
                           {{ $error }}
                        @endforeach
                     </div>

                  </div>

                  <div class="form-group">

                     <label for="abstract">Descrição Resumida</label>

                     <textarea class="form-control {{ $errors->has('abstract') ? 'is-invalid' : '' }}" name="abstract"
                        id="abstract" rows="2"></textarea>

                     <div class="invalid-feedback">
                        @foreach ($errors->get('abstract') as $error)
                           {{ $error }}
                        @endforeach
                     </div>

                  </div>

                  <div class="form-group">

                     <label for="references">Referências</label>

                     <input type="url" name="references"
                        class="form-control {{ $errors->has('references') ? 'is-invalid' : '' }}" id="references">

                     <div class="invalid-feedback">
                        @foreach ($errors->get('references') as $error)
                           {{ $error }}
                        @endforeach
                     </div>

                  </div>

                  <div class="form-row">

                     <div class="form-group col-md-12">

                        <label for="bolsistas">Cadastre Bolsistas</label>

                        {{-- <input list="list-bolsistas" type="text" name="bolsistas[]"
                           class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" id="bolsistas"> --}}

                        <select class="form-control {{ $errors->has('bolsistas') ? 'is-invalid' : '' }}"
                           onchange="setBolsistas(this)" id="bolsistas">

                           <option value="" id="option-checked">
                              Selecione
                           </option>

                           @foreach ($users as $user)
                              @if ($user->hasRole('bolsista'))
                                 <option label="{{ $user->name }}" value="{{ $user->id }}">
                              @endif
                           @endforeach

                        </select>

                        <div class="invalid-feedback">
                           @foreach ($errors->get('bolsista_id') as $error)
                              {{ $error }}
                           @endforeach
                        </div>

                     </div>
                  </div>

                  <div id="res-bolsistas">

                  </div>
               </div>

            </div>

            <button type="submit" class="btn btn-primary">Criar</button>
         </form>
      </div>

   </div>

@section('script')
   <script>

      function setBolsistas(response) {

         var bolsista_id = $('#bolsistas').val();

         var bolsista_name = $('#bolsistas').find('option:selected').attr('label');

         if(bolsista_name) {
            $('#res-bolsistas').append(`<p>${bolsista_name}</p>`);

            $('#res-bolsistas').append(`
                  <input 
                     type="hidden"  
                     name="bolsistas[]" 
                     value='{id: ${bolsista_id}, name: ${bolsista_name}}'
                  >
               `);

            $('#bolsistas').find('option:selected').remove();
            $('#option-checked').prop('selected', 'true');
         }

      }
   </script>
@endsection

@endsection
