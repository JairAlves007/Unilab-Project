@extends('layouts.main')

@include('layouts.navbar')

@include('layouts.sidebar')

<form  action="{{ route('users.registration-store') }}" method="POST">
   <div class="registration mx-auto apply-scholarship form-group">
   @csrf

   <h1 class="">Cadastrar Matrícula</h1>
   <input class="form-control" type="text" name="registration" placeholder="Matrícula">

   @if(Request::route()->getName() === 'users.registration.orientador')

      <select name="institutes_id" id="institutes">

         <option value="">Selecione</option>

         @if(isset($institutes))
            @foreach ($institutes as $institute)
               <option value="{{ $institute->id }}">{{ $institute->name }}</option>
            @endforeach
         @endif

      </select>

   @endif
</div>
   <button class="btn btn-primary registration-submit" type="submit">Enviar</button>
</form>
