@extends('layouts.main')

@section('title', 'Login')

@section('content')

<div
  style="display: flex; gap: 40px; flex-direction: column; justify-content: center; align-items: center; width: 100%; height: 500px;">

  <div class="form-signin bg-white p-3">
    <div class="row">
      <div class="col">
        <img src=" /imagem/logo-menor-sem-fundo.png" alt="Logo" width="60" height="60">
      </div>
    </div>

    <div class="row">
      <div class="col ">
        <div class="mx-auto m-3">
          <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
              <div class="input-group input-group mb-3">
                <div class="input-group-prepend">
                  <x-jet-label class="input-group-text" for="email" value="{{ __('E-mail') }}" />
                </div>
                <x-jet-input id="email" class="form-control mb-0 {{ $errors->has('email') ? 'is-invalid' : '' }}"
                  type="email" name="email" :value="old('email')" autofocus />
              </div>

              <div class="invalid-feedback">
                @foreach ($errors->get('email') as $error)
                {{ $error }}
                @endforeach
              </div>
            </div>

            <div class="form-group">
              <div class="input-group input-group mb-3">
                <div class="input-group-prepend">
                  <x-jet-label class="input-group-text" for="password" value="{{ __('Senha') }}" />
                </div>
                <x-jet-input id="password" class="form-control mb-0 {{ $errors->has('password') ? 'is-invalid' : '' }}"
                  type="password" name="password" autocomplete="current-password" />
              </div>

              <div class="invalid-feedback">
                @foreach ($errors->get('password') as $error)
                {{ $error }}
                @endforeach
              </div>
            </div>

            <label for="remember_me" class="d-flex flex-column">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <x-jet-checkbox id="remember_me" name="remember" />
                  </div>
                </div>
                <div class="form-control text-left">
                  <span class="text-sm text-gray-600">{{ __('Lembre-se de mim') }}</span>
                </div>
              </div>
            </label>

            <div class="form-group">
              <button type="submit" class="btn btn-primary mr-1">
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
    </div>
  </div>
</div>

@endsection
