@extends('layouts.main')

@section('title', 'Crie seu Edital')

@section('content')

   @include('layouts.navbar')

   <div class="d-flex">

      @include('layouts.sidebar')

      <div class="form-create">

         <h1>Crie Um Edital</h1>

         <form action="{{ route('edicts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div id="form-area">
               <div class="form-content">
                  
                  <div class="form-group1">
                     
                     <label for="title">Titulo do Edital</label>

                     <input type="text" name="edict_title" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" id="title"
                        placeholder="Insira o Titulo Aqui...">
                    
                     <div class="invalid-feedback">
                        @foreach ($errors->get('title') as $error)
                           {{ $error }}
                        @endforeach
                     </div>

                  </div>

                  <div class="form-group">

                     <label for="archive">Arquivo do Edital</label>

                     <input type="file" name="archive"
                        class="form-control-file {{ $errors->has('archive') ? 'is-invalid' : '' }}" id="archive">

                     <div class="invalid-feedback">
                        @foreach ($errors->get('archive') as $error)
                           {{ $error }}
                        @endforeach
                     </div>

                  </div>

                  <div class="form-group">

                     <label for="description">Descrição do Edital</label>

                     <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}"
                        name="description" id="description" rows="5" placeholder="Insira a Descrição Aqui..."></textarea>

                     <div class="invalid-feedback">
                        @foreach ($errors->get('description') as $error)
                           {{ $error }}
                        @endforeach
                     </div>

                  </div>
               </div>

               <div class="form-content">

                  <div class="form-row">

                     <div class="form-group col-md-6">

                        <label for="submission_start">Início da Submissão</label>

                        <input type="date" name="submission_start" id="submission_start"
                           class="form-control {{ $errors->has('submission_start') ? 'is-invalid' : '' }}">

                        <div class="invalid-feedback">
                           @foreach ($errors->get('submission_start') as $error)
                              {{ $error }}
                           @endforeach
                        </div>

                     </div>

                     <div class="form-group col-md-6">

                        <label for="submission_finish">Término da Submissão</label>

                        <input type="date" name="submission_finish" id="submission_finish"
                           class="form-control {{ $errors->has('submission_finish') ? 'is-invalid' : '' }}">

                        <div class="invalid-feedback">
                           @foreach ($errors->get('submission_finish') as $error)
                              {{ $error }}
                           @endforeach
                        </div>

                     </div>
                  </div>

                  <div class="form-row">

                     <div class="form-group col-md-6">

                        <label for="rate_start">Início da Avaliação</label>

                        <input type="date" name="rate_start" id="rate_start"
                           class="form-control {{ $errors->has('rate_start') ? 'is-invalid' : '' }}">

                        <div class="invalid-feedback">
                           @foreach ($errors->get('rate_start') as $error)
                              {{ $error }}
                           @endforeach
                        </div>

                     </div>

                     <div class="form-group col-md-6">

                        <label for="rate_finish">Término da Avaliação</label>

                        <input type="date" name="rate_finish" id="rate_finish"
                           class="form-control {{ $errors->has('rate_finish') ? 'is-invalid' : '' }}">

                        <div class="invalid-feedback">
                           @foreach ($errors->get('rate_finish') as $error)
                              {{ $error }}
                           @endforeach
                        </div>

                     </div>
                  </div>

                  <div class="form-row">

                     <div class="form-group col-md-6">

                        <label for="execution_start">Início da Execução</label>

                        <input type="date" name="execution_start" id="execution_start"
                           class="form-control {{ $errors->has('execution_start') ? 'is-invalid' : '' }}">

                        <div class="invalid-feedback">
                           @foreach ($errors->get('execution_start') as $error)
                              {{ $error }}
                           @endforeach
                        </div>

                     </div>

                     <div class="form-group col-md-6">

                        <label for="execution_finish">Término da Execução</label>

                        <input type="date" name="execution_finish" id="execution_finish"
                           class="form-control {{ $errors->has('execution_finish') ? 'is-invalid' : '' }}">

                        <div class="invalid-feedback">
                           @foreach ($errors->get('execution_finish') as $error)
                              {{ $error }}
                           @endforeach
                        </div>

                     </div>
                  </div>

                  <div class="form-row">

                     <div class="form-group col-md-6">

                        <label for="min_titulation">Titulação Mínima</label>

                        <select class="form-control {{ $errors->has('min_titulations') ? 'is-invalid' : '' }}"
                           name="min_titulations_id" id="min_titulation">

                           <option value="">Selecione</option>

                           @foreach ($min_titulations as $titulation)
                              <option value="{{ $titulation->id }}">{{ $titulation->titulation }}</option>
                           @endforeach
                        </select>

                        <div class="invalid-feedback">
                           @foreach ($errors->get('min_titulations_id') as $error)
                              {{ $error }}
                           @endforeach
                        </div>

                     </div>

                     <div class="form-group col-md-6">

                        <label for="category">Categoria</label>

                        <select class="form-control {{ $errors->has('categories_id') ? 'is-invalid' : '' }}"
                           name="categories_id" id="category">

                           <option value="">Selecione</option>

                           @foreach ($categories as $category)
                              <option value="{{ $category->id }}">{{ $category->name }}</option>
                           @endforeach
                        </select>

                        <div class="invalid-feedback">
                           @foreach ($errors->get('categories_id') as $error)
                              {{ $error }}
                           @endforeach
                        </div>

                     </div>
                  </div>

               </div>
            </div>

            <button type="submit" class="btn btn-success">Criar Edital</button>
         </form>
      </div>

   </div>

@endsection