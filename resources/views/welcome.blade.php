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



<div class="content">
    @foreach ($edicts as $edict)
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $edict->title }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">Submetido: {{ date("d-m-Y", strtotime($edict->submission_start)) }}</h6>
                <p class="card-text">{{ $edict->description }}</p>

                <a href="/edict/show/{{ $edict->id }}" class="btn btn-primary">Ver Mais</a>
            </div>
        </div>
    @endforeach

</div>

<div class="d-flex justify-content-center text-primary">
    @if (isset($filters))

        {!!$edicts->appends($filters)->links()!!}

    @else
        {!!$edicts->links()!!}
    @endif

</div>

@if(count($edicts) == 0 && $search)
    <p>Não foi possível encontrar nenhum edital com {{$search}}</p> <a href="/">Voltar a Home</a>
@elseif(count($edicts) == 0)
    <p>Não há editais disponíveis</p>
@endif

@include('layouts.footer')

@endsection
