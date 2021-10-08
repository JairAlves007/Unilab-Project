@extends('layouts.main')

@section('title', 'Home')

@section('content')

    @include("layouts.navbarWelcome")

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

                <a href="/edital/show" class="btn btn-primary">Ver Mais</a>
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

    @include('layouts.footer')

@endsection