@extends('layouts.main')

@section('title', 'Esqueci a senha')

@section('content')
    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <a class="sidebar-toggle text-light mr-3">
            <span class="navbar-toggler-icon"></span>
        </a>

        <a class="navbar-brand" href="#">UNILAB</a>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle menu-header" href="#" id="navbarDropdownMenuLink"
                        data-toggle="dropdown">
                        <img class="rounded-circle" src="imagem/unilabsimbolo.png" width="30" height="30"> &nbsp;<span
                            class="d-none d-sm-inline">Usuário</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria+-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#"><i class="fas fa-user"></i> Perfil</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt"></i> Sair</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    
    <div class="login borda_redonda">
        <div class="form" style="display: flex; gap: 20px; flex-direction: column; justify-content: center; align-items: center;">

            <img src="/imagem/logo-menor-sem-fundo.png" width="60" height="60" alt="Logo">

            <div>
                <div class="mb-4 text-sm text-gray-600">
                    <p>
                        Esqueceu sua senha? Sem problemas.
                    </p>

                    <p>
                        Você receberá um link no seu email para alterar sua senha.
                    </p>
                </div>
        
                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif

                <x-jet-validation-errors class="mb-4" />
            </div>

            <form method="POST" action="{{ route('password.email') }}">
                @csrf
    
                <div class="form-group">
                    <x-jet-label for="email" value="{{ __('Seu Email') }}" />
                    <x-jet-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
                </div>
    
                <button type="submit" class="btn btn-danger">Enviar Link</button>
            </form>
        </div>

        <img class="img-fluid login-img d-none d-md-table-cell" src="/imagem/Data_security_02.jpg" alt="">
    </div>
    
    <div class="jumbotron rodape">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <h5>Contato</h5>
                    <p>
                        (XX)XXXX-XXXX <br>
                        Redenção<br>
                        CEP 62790-000 - Redençãod/CE<br>
                    </p>
                </div>
                <div class="col-12 col-md-6">
                    <h5>Redes Sociais</h5>
                    <ul>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twiter</a></li>
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">YouTube</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
