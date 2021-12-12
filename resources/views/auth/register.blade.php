@extends('layouts.main')

@section('title', 'Registre-se')

@section('content')

<form class="form-signin" id="form-registration" method="POST" action="{{ route('users.register') }}">
  @csrf

  <div class="container-fluid bg-white p-3">

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

    <div class="row">
      <div class="col">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <x-jet-label class="input-group-text" for="name" value="{{ __('Nome') }}" />
          </div>
          <x-jet-input id="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text"
            name="name" :value="old('name')" autofocus autocomplete="name" />
          <div class="invalid-feedback">
            @foreach ($errors->get('name') as $error)
            {{ $error }}
            @endforeach
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <x-jet-label class="input-group-text" for="email" value="{{ __('Email') }}" />
          </div>
          <x-jet-input id="email" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" type="email"
            name="email" :value="old('email')" />
          <div class="invalid-feedback">
            @foreach ($errors->get('email') as $error)
            {{ $error }}
            @endforeach
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <x-jet-label class="input-group-text" for="password" value="{{ __('Senha') }}" />
          </div>
          <x-jet-input id="password" class="form-control m-0 {{ $errors->has('password') ? 'is-invalid' : '' }}"
            type="password" name="password" autocomplete="new-password" />
          <div class="invalid-feedback">
            @foreach ($errors->get('password') as $error)
            {{ $error }}
            @endforeach
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <x-jet-label class="input-group-text" for="password_confirmation" value="{{ __('Confirmar Senha') }}" />
          </div>
          <x-jet-input id="password_confirmation"
            class="form-control m-0 {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}" type="password"
            name="password_confirmation" autocomplete="new-password" />
          <div class="invalid-feedback">
            @foreach ($errors->get('password_confirmation') as $error)
            {{ $error }}
            @endforeach
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col text-left">
        <div class="input-group-text">
          <p>Função No Sistema</p>

          @if ($errors->has('niveis'))

          <p class="text-danger">Marque Um Nível De Acesso</p>

          @endif

          @if (session('bolsista_and_orientador'))

          <p class="text-danger">{{ session('bolsista_and_orientador') }}</p>

          @endif
        </div>

        <div class="form-control">
          <div class="pl-0">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <input class="{{ $errors->has('niveis') || session('bolsista_and_orientador') ? 'is-invalid' : '' }}"
                    type="checkbox" name="niveis[]" value="bolsista" id="checkBolsista">
                </div>
              </div>
              <div class="form-control">
                <label class="pl-0-label mb-0 inpunt-group-text" for="checkBolsista">
                  Bolsista/Voluntário
                </label>
              </div>
            </div>
          </div>

          <div class="pl-0">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <div class="input-group-text" id="inputGroup-sizing-default">
                  <input class="{{ $errors->has('niveis') || session('bolsista_and_orientador') ? 'is-invalid' : '' }}"
                    type="checkbox" name="niveis[]" value="orientador" id="checkOrientador">
                </div>
              </div>
              <div class="form-control">
                <label class="pl-0-label mb-0" for="checkOrientador">
                  Orientador/Coordenador
                </label>
              </div>
            </div>
          </div>

          <div class="pl-0">
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <input class="{{ $errors->has('niveis') || session('bolsista_and_orientador') ? 'is-invalid' : '' }}"
                    type="checkbox" name="niveis[]" value="membro" id="checkMembro">
                </div>
              </div>
              <div class="form-control">
                <label class="pl-0-label mb-0" for="checkMembro">
                  Membro da Comissão(CAPP)
                </label>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <div class="d-flex justify-content-center align-items-center mt-3">
          <button type="submit" id="btn-modal" class="btn btn-md btn-primary">
            <i class="fas fa-user-plus"></i>
            Cadastrar
          </button>

          <a class="underline text-sm text-gray-600 hover:text-gray-900 ml-2" href="{{ route('login') }}">
            {{ __('Já está cadastrado?') }}
          </a>
        </div>
      </div>
    </div>
  </div>

</form>

@endsection
