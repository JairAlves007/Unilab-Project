@extends('layouts.main')

@section('title', 'Anexe um Projeto')

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
                     <input 
                        type="text" 
                        name="title" 
                        class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" 
                        id="title" 
                     >

                     <div class="invalid-feedback">
                        @foreach ($errors->get('title') as $error)
                           {{ $error }}
                        @endforeach
                     </div>

                  </div>

                  <div class="form-group">

                     <label for="content">Descrição Completa</label>

                     <textarea 
                        class="form-control {{ $errors->has('content') ? 'is-invalid' : '' }}" 
                        name="content" 
                        id="content" 
                        rows="3" 
                     ></textarea>

                     <div class="invalid-feedback">
                        @foreach ($errors->get('content') as $error)
                           {{ $error }}
                        @endforeach
                     </div>

                  </div>

                  <div class="form-group">

                     <label for="abstract">Descrição Resumida</label>

                     <textarea 
                        class="form-control {{ $errors->has('abstract') ? 'is-invalid' : '' }}" 
                        name="abstract" 
                        id="abstract" 
                        rows="2"
                     ></textarea>

                     <div class="invalid-feedback">
                        @foreach ($errors->get('abstract') as $error)
                           {{ $error }}
                        @endforeach
                     </div>

                  </div>

                  <div class="form-group">

                     <label for="references">Referências</label>

                     <input 
                        type="url" 
                        name="references" 
                        class="form-control {{ $errors->has('references') ? 'is-invalid' : '' }}" 
                        id="references"
                     >

                     <div class="invalid-feedback">
                        @foreach ($errors->get('references') as $error)
                           {{ $error }}
                        @endforeach
                     </div>

                  </div>
               </div>

            </div>

            <button type="submit" class="btn btn-primary">Criar</button>
         </form>
      </div>

   </div>

@endsection