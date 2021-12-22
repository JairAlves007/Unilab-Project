@extends('layouts.main')

@section('title', 'Registre-se')

@section('content')

@include('layouts.navbar')

<div class="d-flex">

  @include('layouts.sidebar')

  <div class="content p-1">
    <div class="list-group-item">

      <h1 class="display-4 titulo">Cadastrar Usuário</h1>

      <br>

      <form class="form-type-2" method="POST" action="{{ route('users.store') }}">
        @csrf

        <div class="form-row">
          <div class="col">
            <div class="form-group">
              <div class="input-group">
                <div class="inpt-group-prepend">
                  <x-jet-label class="mb-0 input-group-text" for="name" value="{{ __('Nome') }}" />
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
        </div>


        <div class="form-row">
          <div class="col">
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-prepend">
                  <x-jet-label class="mb-0 input-group-text" for="email" value="{{ __('E-mail') }}" />
                </div>
                <x-jet-input id="email" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                  type="email" name="email" :value="old('email')" />
                <div class="invalid-feedback">
                  @foreach ($errors->get('email') as $error)
                  {{ $error }}
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="form-row">
          <div class="col">
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-prepend">
                  <x-jet-label class="mb-0 input-group-text" for="password" value="{{ __('Senha') }}" />
                </div>
                <x-jet-input id="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                  type="password" name="password" autocomplete="new-password" />
                <div class="invalid-feedback">
                  @foreach ($errors->get('password') as $error)
                  {{ $error }}
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="form-row">
          <div class="col">
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-prepend">
                  <x-jet-label class="mb-0 input-group-text" for="password_confirmation"
                    value="{{ __('Confirmar Senha') }}" />
                </div>
                <x-jet-input id="password_confirmation"
                  class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}" type="password"
                  name="password_confirmation" autocomplete="new-password" />
                <div class="invalid-feedback">
                  @foreach ($errors->get('password_confirmation') as $error)
                  {{ $error }}
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="form-row">
          <div class="col">





            @if (session('bolsista_and_orientador'))

            <p class="text-danger">{{ session('bolsista_and_orientador') }}</p>

            @endif
          </div>
        </div>

        <div class="form-row">
          <div class="col">

            <p class="mb-0 input-group-text">
              Nível de Acesso
            </p>

            <div class="bg-white border p-2 mb-2">


              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input class="{{ $errors->has('niveis') || session('bolsista_and_orientador')
                        ? 'is-invalid' : '' }}" type="checkbox" name="niveis[]" value="gestor" id="checkGestor">
                  </div>
                </div>
                <label class="form-control text-left" for="checkGestor">
                  Gestor
                </label>
              </div>


              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input
                      class="{{ $errors->has('niveis') || session('bolsista_and_orientador') ? 'is-invalid' : '' }}"
                      type="checkbox" name="niveis[]" value="bolsista" id="checkBolsista">
                  </div>
                </div>
                <label class="form-control text-left" for="checkBolsista">
                  Bolsista/Voluntário
                </label>
              </div>


              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input
                      class="{{ $errors->has('niveis') || session('bolsista_and_orientador') ? 'is-invalid' : '' }}"
                      type="checkbox" name="niveis[]" value="orientador" id="checkOrientador">
                  </div>
                </div>
                <label class="form-control text-left" for="checkOrientador">
                  Orientador/Coordenador
                </label>
              </div>


              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input
                      class="{{ $errors->has('niveis') || session('bolsista_and_orientador') ? 'is-invalid' : '' }}"
                      type="checkbox" name="niveis[]" value="membro" id="checkMembro">
                  </div>
                </div>
                <label class="form-control text-left" style="height: 100%" for="checkMembro">
                  Membro da Comissão (CAPP)
                </label>
              </div>
              <div class="invalid-feedback">
                @foreach ($errors->get('niveis') as $error)
                {{ $error }}
                @endforeach
              </div>

              @if ($errors->has('niveis'))
              <div class="mt-2">
                <p class="text-danger small mb-0">Marque Um Nível De Acesso</p>
              </div>
              @endif
            </div>
          </div>
        </div>

        <div class="form-row">
          <div class="col">
            <button type="submit" class="btn btn-success my-2">Cadastrar</button>
          </div>
        </div>
      </form>
    </div>
  </div>

</div>

@endsection
