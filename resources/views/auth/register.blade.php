{{-- @extends('layouts.main')

@section('title', 'Registre-se')

@section('content')

    <nav class="navbar navbar-expand navbar-dark">
        <div class="container">

            <a href="index.html">
                <img src="./imagem/logo-menor-sem-fundo.png" height="40" width="" alt="">
                <h1 style="margin-left: 10px;" class="navbar-brand">UNILAB</h1>
            </a>
        </div>
    </nav>

    @include('errors.cardMessage')

    <div class="login borda_redonda">
        <div class="form">


            <form class="form-signin" method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group">
                    <x-jet-label for="name" value="{{ __('Nome') }}" />
                    <x-jet-input id="name" class="form-control" type="text" name="name" :value="old('name')"
                        required autofocus autocomplete="name" />
                </div>

                <div class="form-group">
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <x-jet-input id="email" class="form-control" type="email" name="email"
                        :value="old('email')" required />
                </div>

                <div class="form-group">
                    <x-jet-label for="password" value="{{ __('Senha') }}" />
                    <x-jet-input id="password" class="form-control" type="password" name="password" required
                        autocomplete="new-password" />
                </div>

                <div class="form-group">
                    <x-jet-label for="password_confirmation" value="{{ __('Confirmar Senha') }}" />
                    <x-jet-input id="password_confirmation" class="form-control" type="password"
                        name="password_confirmation" required autocomplete="new-password" />
                </div>

                <div class="form-row">

                    <div class="form-group col-md-12">

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="niveis[]" value="gestor" id="checkGestor">
                            <label class="form-check-label" for="checkGestor">
                                Gestor
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="niveis[]" value="bolsista" id="checkBolsista">
                            <label class="form-check-label" for="checkBolsista">
                                Bolsista/Voluntário
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="niveis[]" value="orientador" id="checkOrientador">
                            <label class="form-check-label" for="checkOrientador">
                                Orientador/Coordenador
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="niveis[]" value="membro" id="checkMembro">
                            <label class="form-check-label" for="checkMembro">
                                Membro da Comissão(CAPP)
                            </label>
                        </div>

                    </div>
                </div>

                

                <div class="flex items-center justify-end mt-4">
                    <button type="submit" class="btn btn-lg btn-primary">Cadastrar</button>

                    <br>
                    <br>

                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('Já Está Cadastrado?') }}
                    </a>
                </div>
            </form>
        </div>

        <img class="img-fluid login-img d-none d-md-table-cell" src="imagem/Data_security_02.jpg" alt="">
    </div>

    @include('layouts.footer')

@endsection --}}
@extends('layouts.main')

@section('title', 'Registre-se')

@section('content')


    <form class="form-signin" method="POST" action="{{ route('register') }}">
        @csrf

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center align-items-center">
                    <img class="rounded-circle" src="/imagem/unilabsimbolo.png">
                    <h3 class="logo_title">UNILAB</h3>
                </div>
            </div>

            <div class="form-group">
                <x-jet-label for="name" value="{{ __('Nome') }}" />
                <x-jet-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus
                    autocomplete="name" />
            </div>

            <div class="form-group">
                <x-jet-label for="email" value="{{ __('E-Mail') }}" />
                <x-jet-input id="email" class="form-control" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="form-group">
                <x-jet-label for="password" value="{{ __('Senha') }}" />
                <x-jet-input id="password" class="form-control" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <div class="form-group">
                <x-jet-label for="password_confirmation" value="{{ __('Confirmar Senha') }}" />
                <x-jet-input id="password_confirmation" class="form-control" type="password" name="password_confirmation"
                    required autocomplete="new-password" />
            </div>

            <h6>Função No Sistema</h6>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="niveis[]" value="bolsista" id="checkBolsista">
                <label class="form-check-label" for="checkBolsista">
                    Bolsista
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="niveis[]" value="orientador" id="checkOrientador">
                <label class="form-check-label" for="checkOrientador">
                    Orientador
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="niveis[]" value="membro" id="checkMembro">
                <label class="form-check-label" for="checkMembro">
                    Membro
                </label>
            </div>
            <div class="flex items-center justify-end mt-4">
                <button type="submit" class="btn btn-lg btn-primary">Cadastrar</button>

                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Já Está Cadastrado?') }}
                </a>
            </div>
        </div>
    </form>

@endsection