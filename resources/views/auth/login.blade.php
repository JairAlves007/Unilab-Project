@extends('layouts.main')

@section('title', 'Login')

@section('content')

   <div
      style="display: flex; gap: 40px; flex-direction: column; justify-content: center; align-items: center; width: 100%; height: 500px;">

      <img src="/imagem/logo-menor-sem-fundo.png" alt="Logo" width="60" height="60">

      <div class="form">
         <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
               <x-jet-label for="email" value="{{ __('Email') }}" />
               <x-jet-input id="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email"
                  name="email" :value="old('email')" autofocus />

               <div class="invalid-feedback">
                  @foreach ($errors->get('email') as $error)
                     {{ $error }}
                  @endforeach
               </div>
            </div>

            <div class="form-group">
               <x-jet-label for="password" value="{{ __('Senha') }}" />
               <x-jet-input id="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                  type="password" name="password" autocomplete="current-password" />
               <div class="invalid-feedback">
                  @foreach ($errors->get('password') as $error)
                     {{ $error }}
                  @endforeach
               </div>
            </div>

            <div class="form-group">
               <label for="remember_me" class="flex items-center">
                  <x-jet-checkbox id="remember_me" name="remember" />
                  <span class="ml-2 text-sm text-gray-600">{{ __('Lembre-se de mim') }}</span>
               </label>
            </div>

            <div class="form-group">
               <button type="submit" class="btn btn-primary">
                  <i class="fas fa-sign-in-alt mr-1"></i>
                  Login
               </button>

               @if (Route::has('password.request'))
                  <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                     {{ __('Esqueceu sua senha?') }}
                  </a>
               @endif
            </div>
         </form>
      </div>
   </div>

@endsection
