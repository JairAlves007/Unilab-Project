@extends('layouts.main')

@section('content')
{{-- <div class="col-md-10 offset-md-1">
    <div class="row">
        <div id="info-container" class="col-md-6">
            <h1>Titulo</h1>
            <p class="event-city">
                07/10/2021-08/10/2021
            </p>
            <p class="events-participants">
                2 participantes
            </p>
            <p class="event-owner">
                Autor: Neymar
            </p>
            @if(!$hasUserJoined)
            <form action="/events/join/" method="POST">
                @csrf
                <a href="/events/join/" class="btn btn-primary" id="event-submit" onclick="event.preventDefault();
              this.closest('form').submit();">
                    Confirmar Presença
                </a>
            </form>
            @else
            <p class="already-joined-msg">Você já está participando deste evento!</p>
            @endif
            <h3>O evento conta com:</h3>

        </div>
        <div class="col-md-12" id="description-container">
            <h3>Sobre o evento:</h3>
            <p class="event-description">uibu</p>
        </div>
    </div> --}}
{{-- </div> --}}
<div class="edicts-view">
<div id="edicts-container">
    <div class="edicts-content">
        <h2>Titulo</h2>
        <p>07/10/2021-08/10/2021</p>
        <h4>Graduado</h4>

        <p>Autor:Neymar</p>
        <a href="/events/join/" class="btn btn-primary" id="event-submit" onclick="event.preventDefault();
              this.closest('form').submit();">
            Baixar PDF
        </a>
    </div>
    <div class="edicts-description">
        <h4>Categoria</h4>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate pariatur nobis tempore eos qui soluta repellat labore, optio, suscipit saepe harum sit magni enim maiores quas rerum distinctio nostrum totam.</p>
    </div>
</div>
</div>
@endsection