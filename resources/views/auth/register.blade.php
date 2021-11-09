@extends('layouts.main')

@section('title', 'Registre-se')

@section('content')

   <form class="form-signin" id="form-registration" method="POST" action="{{ route('users.register') }}">
      @csrf

      <div class="container-fluid">

         @if ($errors->has('abstract_bolsista') || $errors->has('abstract_orientador'))
            @foreach ($errors->all() as $error)
               <p class="text-danger">{{ $error }}</p>
            @endforeach
         @endif

         <div class="row">
            <div class="col-md-12 d-flex justify-content-center align-items-center">
               <img class="rounded-circle" src="/imagem/unilabsimbolo.png">
               <h3 class="logo_title">UNILAB</h3>
            </div>
         </div>


         @include('hintMessages')

         <div class="form-group">
            <x-jet-label for="name" value="{{ __('Nome') }}" />
            <x-jet-input id="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text"
               name="name" :value="old('name')" autofocus autocomplete="name" />

            <div class="invalid-feedback">
               @foreach ($errors->get('name') as $error)
                  {{ $error }}
               @endforeach
            </div>
         </div>

         <div class="form-group">
            <x-jet-label for="email" value="{{ __('Email') }}" />
            <x-jet-input id="email" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" type="email"
               name="email" :value="old('email')" />
            <div class="invalid-feedback">
               @foreach ($errors->get('email') as $error)
                  {{ $error }}
               @endforeach
            </div>
         </div>

         <div class="form-group">
            <x-jet-label for="password" value="{{ __('Senha') }}" />
            <x-jet-input id="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
               type="password" name="password" autocomplete="new-password" />
            <div class="invalid-feedback">
               @foreach ($errors->get('password') as $error)
                  {{ $error }}
               @endforeach
            </div>
         </div>

         <div class="form-group">
            <x-jet-label for="password_confirmation" value="{{ __('Confirmar Senha') }}" />
            <x-jet-input id="password_confirmation"
               class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}" type="password"
               name="password_confirmation" autocomplete="new-password" />
            <div class="invalid-feedback">
               @foreach ($errors->get('password_confirmation') as $error)
                  {{ $error }}
               @endforeach
            </div>
         </div>

         <p>Função No Sistema</p>

         @if ($errors->has('niveis'))
            <p class="text-danger">Marque Um Nível De Acesso</p>
         @endif

         <div class="form-check">
            <input class="form-check-input {{ $errors->has('niveis') ? 'is-invalid' : '' }}" type="checkbox"
               name="niveis[]" value="bolsista" id="checkBolsista">
            <label class="form-check-label" for="checkBolsista">
               Bolsista/Voluntário
            </label>
         </div>

         <div class="form-check">
            <input class="form-check-input {{ $errors->has('niveis') ? 'is-invalid' : '' }}" type="checkbox"
               name="niveis[]" value="orientador" id="checkOrientador">
            <label class="form-check-label" for="checkOrientador">
               Orientador/Coordenador
            </label>
         </div>

         <div class="form-check">
            <input class="form-check-input {{ $errors->has('niveis') ? 'is-invalid' : '' }}" type="checkbox"
               name="niveis[]" value="membro" id="checkMembro">
            <label class="form-check-label" for="checkMembro">
               Membro da Comissão(CAPP)
            </label>
         </div>

         <div class="d-flex justify-content-center align-items-center mt-1">
            <button type="submit" id="btn-modal" class="btn btn-md btn-primary">
               <i class="fas fa-user-plus"></i>
               Cadastrar
            </button>

            <a class="underline text-sm text-gray-600 hover:text-gray-900 ml-2" href="{{ route('login') }}">
               {{ __('Já está cadastrado?') }}
            </a>
         </div>
      </div>

   </form>

@endsection
