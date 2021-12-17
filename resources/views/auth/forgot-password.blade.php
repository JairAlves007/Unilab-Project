@extends('layouts.main')

@section('title', 'Esqueci a senha')

@section('content')

<div class="centralizer">
  <div class="form-type-3 bg-white border rounded">
    <div class="container">

      <div class="row">
        <div class="col">
          <img src="/imagem/logo-menor-sem-fundo.png" width="60px" height="60px" alt="Logo">
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="m-2">
            Digite seu e-mail para receber o link do formulário de alteração. Acesse-o e altere sua senha.
          </div>

          @if (session('status'))
          <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
          </div>
          @endif

          <x-jet-validation-errors class="mb-4" />
        </div>
      </div>


      <div class="row">
        <div class="col">
          <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="form-group">

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <x-jet-label class="mb-0" for="email" value="{{ __('Seu Email') }}" />
                  </div>
                </div>
                <x-jet-input id="email" class="form-control" type="email" name="email" :value="old('email')" required
                  autofocus />
              </div>



            </div>

            <button type="submit" class="btn btn-primary">Enviar Link</button>
          </form>
        </div>
      </div>


    </div>
  </div>

</div>

@endsection
