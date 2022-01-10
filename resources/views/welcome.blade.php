@extends('layouts.main')

@section('title', 'Home')

@section('content')

@include("layouts.navbarWelcome")
<section id="search-bar">
  <div class="centralizer flex-column mx-2 w-100 h-100">

    <h1 class="text-white mb-5">Sistema de Fluxo Contínuo</h1>

    <form class="w-100 px-5" action="/search" method="POST">
      @csrf
      <div class="input-group">
        <input type="search" name="search" placeholder="Busque um Edital" class="form-control form-control-lg"
          id="search-size-control">
        <div class="input-group-append">
          <button class="btn-lg btn-danger border border-danger" id="search-btn-control" type="submit">
            <i class="fa fa-fw fa-search"></i>
            Buscar
          </button>
        </div>
      </div>
    </form>

  </div>
</section>

@if (isset($search))
<h1 class="title2">Buscando Por: {{ $search }}</h1>
@else
<h1 class="title2">Editais</h1>
@endif

<div class="container">
  <div class="row">
    @foreach ($edicts as $edict)
    <div class="col-md-4">
      <div class="card mx-auto" style="width: 18rem;">
        <div class="card-body">
          <div class="overflow-hidden" style="height: 121.188px">
            <h5 class="card-title">{{ $edict->edict_title }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">Submetido:
              {{ date('d-m-Y', strtotime($edict->submission_start)) }}</h6>
            <div class="card-text overflow-hidden mb-auto card-formater">
              {!!$edict->description !!}</div>
          </div>
          <hr class="mt-0">
          <a href="{{ route('edicts.showHome', $edict) }}" class="btn btn-info mt-auto">
            <i class="fas fa-eye mr-1"></i>
            Ver Mais
          </a>
        </div>
      </div>
    </div>
    @endforeach
  </div>

</div>

<div class="d-flex justify-content-center text-primary">
  @if (isset($filters))

  {!! $edicts->appends($filters)->links() !!}

  @else
  {!! $edicts->links() !!}
  @endif

</div>

@if (count($edicts) == 0 && isset($search))
<p>Não foi possível encontrar nenhum edital com {{ $search }}</p> <a href="/">Voltar a Home</a>
@elseif(count($edicts) == 0)
<p>Não há editais disponíveis</p>
@endif

@include('layouts.footer')

@endsection
