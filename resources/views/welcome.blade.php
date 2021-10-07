@extends('layouts.main')

@section('title', 'Home')

@section('content')

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img class="rounded-circle" src="imagem/unilabsimbolo.png" width="30" height="30">
            <a class="title-logo" href="#">Unilab</a>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

                <li class="nav-item">
                    <a class="nav-link" href="#">Editais</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Projetos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sobre</a>
                </li>
                <li class="nav-item dropdown md-auto" id="menu">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Entrar
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/register">Cadastrar</a>
                        <a class="dropdown-item" href="/login">Logar</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<section class="search-bar">
    <div class="container">
        <div class="row">
            <div class="mx-auto col-lg-10">
                <h1 class="title">Sistema de Fluxo Contínuo</h1>
                <form action="/search" method="POST">
                    @csrf
                    <div class="input-group">
                        <input type="search" name="search" placeholder="Busque um Edital" class="form-control">
                        <button class="btn-lg btn-danger" type="submit">Buscar</button>
                    </div>
                </form>



            </div>
        </div>
    </div>
</section>

@if(isset($search))
<h1 class="title2">Buscando Por: {{$search}}</h1>
@else
<h1 class="title2">Editais</h1>
@endif



<div class="row content">


    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Titulo Do Edital</h5>
            <h6 class="card-subtitle mb-2 text-muted">enviado 07/10/2021</h6>
            <p class="card-text">Descrição</p>

            <a href="#" class="btn btn-primary">Ver Mais</a>
        </div>
    </div>
    {{-- @foreach ($all_editals as $edital)

        @endforeach --}}

</div>

{{-- <div class="d-flex justify-content-center text-primary">
        @if (isset($filters))

            {!!$all_editals->appends($filters)->links()!!}

        @else
            {!!$all_editals->links()!!}
        @endif

    </div> --}}

<div class="container-fluid rodape">

    <footer class="container">
        <div class="row">
            <div class="col-12 col-md-10 ">
                <p class="titulo-rodape">&copy; Unilab | contato@unilab.com.br</p>
                <!-- <p>CEP 62790-000 - Redenção/CE</p> -->
            </div>
            <div class="col-12 col-md-2 row">
                <div class="border"><a href=""><img class="icon" src="/icons/instagram.svg" alt=""></a></div>
                <div class="border"><a href=""><img class="icon" src="/icons/facebook.svg" alt=""></a></div>
                <div class="border"><a href=""><img class="icon" src="/icons/skype.svg" alt=""></a></div>
                <div class="border"><a href=""><img class="icon" src="/icons/whatsapp.svg" alt=""></a></div>

            </div>
        </div>
    </footer>
</div>
@endsection