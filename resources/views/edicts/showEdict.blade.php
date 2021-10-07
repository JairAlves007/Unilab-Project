@extends('layouts.main')

@section('content')

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

@endsection