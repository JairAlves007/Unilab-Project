@extends('layouts.main')

@section('title', 'Cadastre Sua Matrícula')

@section('content')

   @include('layouts.navbar')

   <div class="d-flex">

      @include('layouts.sidebar')

      <div class="content p-1">
         <div class="list-group-item">
            <h1 class="">Cadastrar Matrícula</h1>

            <form action="{{ route('users.registration-store') }}" method="POST">
               @csrf

               <div class="form-row">

                  <div class="form-group col-md-6 mx-auto">
                     <input class="form-control" type="text" name="registration" placeholder="Cadastre Sua Matrícula">
                  </div>

               </div>

               @if (Request::route()->getName() === 'users.registration.orientador')
                  <div class="form-row">
                     
                     <div class="form-group col-md-6 mx-auto">
                        <select name="institutes_id" id="institutes">
      
                           <option value="">Selecione</option>
      
                           @if (isset($institutes))
                              @foreach ($institutes as $institute)
                                 <option value="{{ $institute->id }}">{{ $institute->name }}</option>
                              @endforeach
                           @endif
      
                        </select>
                     </div>
                  
                  </div>

               @endif

               {{--  --}}
               <button class="btn btn-primary registration-submit" type="submit">Enviar</button>
            </form>

         </div>
      </div>
   </div>

@endsection
