@extends('layouts.main')

@section('title', 'Veja Mais Sobre o Edital')

@section('content')

    @include('layouts.navbarWelcome')

    <div id="edicts-container">
        <div class="edicts-content">
            <h2>{{ $edict->title }}</h2>
            <p>{{ $edict->titulations->titulation }}</p>
            <p>{{ $edict->categories->name }}</p>
            <p>{{ date("d-m-Y", strtotime($edict->submission_start)) }}-{{ date("d-m-Y", strtotime($edict->submission_finish)) }}</p>
            <a href="/events/join/" class="btn btn-primary" id="event-submit" onclick="event.preventDefault();
                this.closest('form').submit();">
                Baixar PDF
            </a>
        </div>
        <div class="edicts-description">
            <h4>Descrição</h4>
            <p>{{ $edict->description }}</p>
            <p>Autor: Neymar</p>
        </div>
    </div>

    <h1 class="title-bold">
        Projetos Relacionados
    </h1>

    <div id="documents-container">

        <div class="document">
            <div class="document-info">
                <i class="far fa-file-pdf fa-lg"></i>

                <span>
                    Nome do projeto
                </span>
            </div>

            <div class="document-download">
                <a href="#" class="btn btn-success">
                    <i class="fas fa-download"></i>
                </a>
                <a href="#" class="btn btn-outline-primary">
                    Ver Mais
                </a>
            </div>

        </div>

        <div class="document">
            <div class="document-info">
                <i class="far fa-file-pdf fa-lg"></i>

                <span>
                    Nome do projeto
                </span>
            </div>

            <div class="document-download">
                <a href="#" class="btn btn-success">
                    <i class="fas fa-download"></i>
                </a>
                <a href="#" class="btn btn-outline-primary">
                    Ver Mais
                </a>
            </div>

        </div>

    </div>

    @include('layouts.footer')

@endsection
