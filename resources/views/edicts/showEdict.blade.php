@extends('layouts.main')

@section('title', 'Veja Mais Sobre o Edital')

@section('content')

@if (Request::route()->getName() === 'edicts.showHome')

@include('layouts.navbarWelcome')

@elseif(Request::route()->getName() === 'edicts.showDashboard')

@include('layouts.navbar')

@endif

@if (Request::route()->getName() === 'edicts.showDashboard')
<div class="d-flex">

  @include('layouts.sidebar')

  <div class="content bg-white m-1" id="content-p-1">

    @endif

    <div class="bg-white border rounded" id="edicts-container">
      <div class="container">
        <div class="row">
          <div class="col">
            <h2 class="display-4 titulo text-left">{{ $edict->edict_title }}</h2>
          </div>
          <div class="col">
            <h4 class="display-4 titulo text-left">Descrição</h4>
          </div>
        </div>
        <div class="row text-left small">
          <div class="col">
            <div class="edicts-content">
              <p>Titulação mínima: <i>{{ $edict->titulations->titulation }}</i></p>
              <p>Categoria: <i>{{ $edict->categories->name }}</i></p>
              <p>Duração: <i>{{ date('d-m-Y', strtotime($edict->submission_start)) }}</i> até
                <i>{{ date('d-m-Y', strtotime($edict->submission_finish)) }}</i>
              </p>
            </div>
          </div>
          <div class="col">
            <div class="edicts-description">
              <p>Descrição: <i>{{ $edict->description }}</i></p>
              <p>Autor: <i>{{ $edict->ownerEdict->name }}</i></p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="d-flex justify-content-end">
              <div class="m-1">
                <a href="/storage/{{ $edict->archive }}" class="btn btn-primary" id="event-submit"
                 target="_blank">
                  Ver PDF
                </a>
              </div>
              @if (Request::route()->getName() === 'edicts.showDashboard' && $user->can('rate-edict'))
              <div class="m-1">
                <button type="button" id="btn-modal-rate" class="btn btn-warning">
                  @if ($rate)
                  Alterar Sua Avaliação
                  @else
                  Avaliar
                  @endif
                </button>
              </div>
              @endif
            </div>
          </div>
        </div>
      </div>

    </div>

    {{-- <iframe src="{{ url("/storage/{$edict->archive}") }}" frameborder="0"></iframe> --}}

    <h1 class="display-4 titulo">
      Projetos Relacionados
    </h1>

    <div class="table-width-controller">
      <div class="table table-responsive">
        <table class="table table-striped table-hover table-bordered" id="table-responsive">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Título</th>
              <th scope="col">Grande Área</th>
              <th scope="col">Área</th>
              <th scope="col">Sub-Área</th>
              <th scope="col">PDF</th>

              @if ($user && $user->hasRole('bolsista') && $user->can_access)
              <th scope="col">Ações</th>
              @endif

            </tr>
          </thead>

          <tbody>
            @forelse($projects_attachs as $project)

            <tr>
              <th scope="row">{{ $project->id }}</th>
              <td>{{ $project->title }}</td>
              <td>{{ $project->big_area->name }}</td>
              <td>{{ $project->area->name }}</td>
              <td>{{ $project->sub_area->name }}</td>
              <td>
                <a href="/storage/{{ $project->archive }}" class="btn btn-primary" id="event-submit"
                  target="_blank">
                   Ver PDF
                 </a>
              </td>

              @if ($user && $user->hasRole('bolsista') && $user->can_access)

              @if (count($participants) > 0)

              @for ($i = 0; $i < count($participants); $i++) @if ($participants[$i]->user_id === $user->id)


                @if ($participants[$i]->project_id === $project->id)

                @if ($participants[$i]->participating)

                <td>
                  Aprovado!
                </td>

                @else

                <td>
                  Aguardando Aprovação...
                </td>

                @endif

                @else

                <td>
                  Você Não Pode Mais Se Candidatar
                </td>

                @endif


                @endif

                @endfor

                @else
                <td>
                  <form action="{{ route('projects.join', [$edict->id, $project->id]) }}" method="POST">
                    @csrf

                    <a href="{{ route('projects.join', [$edict->id, $project->id]) }}" class="btn btn-outline-primary"
                      onclick="
                                          event.preventDefault();
                                          this.closest('form').submit();
                                       ">

                      Candidatar

                    </a>
                  </form>
                </td>
                @endif
                @endif

            </tr>

            @empty
            <tr class="table-responsive-tr">
              <th scope="row"></th>
              <td>Nenhum Projeto Anexado</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>


              @if ($user && $user->hasRole('bolsista') && $user->can_access)

              <td></td>

              @endif

            </tr>

            @endforelse

          </tbody>
        </table>
      </div>

    </div>

    @if (Request::route()->getName() === 'edicts.showDashboard')

  </div>
</div>

<div class="modal fade" id="modal-rate" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Avaliar O Edital "{{ $edict->title }}"</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('edicts.rate') }}" id="form-rate" method="POST">
          @csrf

          <input type="hidden" name="id" value="{{ $edict->id }}">

          <div class="form-row">

            <div class="form-group col-md-12">

              <input type="radio" name="rate" value="1" id="rate1" class="form-check-input">
              <label class="form-check-label" for="rate1">
                1
              </label>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-12">

              <input type="radio" name="rate" value="2" id="rate2" class="form-check-input">
              <label class="form-check-label" for="rate2">
                2
              </label>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-12">

              <input type="radio" name="rate" value="3" id="rate3" class="form-check-input">
              <label class="form-check-label" for="rate3">
                3
              </label>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-12">

              <input type="radio" name="rate" value="4" id="rate4" class="form-check-input">
              <label class="form-check-label" for="rate4">
                4
              </label>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-12">
              <input type="radio" name="rate" value="5" id="rate5" class="form-check-input">
              <label class="form-check-label" for="rate5">
                5
              </label>
            </div>
          </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="submit" form="form-rate" class="btn btn-primary">Avalie</button>
      </div>
    </div>
  </div>
</div>

@endif


@if (Request::route()->getName() === 'edicts.showHome')
@include('layouts.footer')
@endif

@if (Request::route()->getName() === 'edicts.showDashboard')
@section('script')
<script>
  $('#btn-modal-rate').click(() => {
               $('#modal-rate').modal({
                  show: true
               });
            });
</script>
@endsection
@endif

@endsection
