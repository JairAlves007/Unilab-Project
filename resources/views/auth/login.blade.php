@extends('layouts.main')

@section('title', 'Login')

@section('content')

   @include('errors.cardMessage')

   <div
      style="display: flex; gap: 40px; flex-direction: column; justify-content: center; align-items: center; width: 100%; height: 500px;">

      <img src="/imagem/logo-menor-sem-fundo.png" alt="Logo" width="60" height="60">

      <div class="form">
         <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
               <x-jet-label for="email" value="{{ __('Email') }}" />
               <x-jet-input id="email" class="form-control" type="email" name="email" :value="old('email')" required
                  autofocus />
            </div>

            <div class="form-group">
               <x-jet-label for="password" value="{{ __('Senha') }}" />
               <x-jet-input id="password" class="form-control" type="password" name="password" required
                  autocomplete="current-password" />
            </div>

            <div class="form-group">
               <label for="remember_me" class="flex items-center">
                  <x-jet-checkbox id="remember_me" name="remember" />
                  <span class="ml-2 text-sm text-gray-600">{{ __('Lembre-se de mim') }}</span>
               </label>
            </div>

            <div class="form-group">
               <button type="submit" class="btn btn-primary">Login</button>

               @if (Route::has('password.request'))
                  <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                     {{ __('Esqueceu Sua Senha?') }}
                  </a>
               @endif
            </div>
         </form>
      </div>
   </div>

@endsection
