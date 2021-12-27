@extends('layouts.main')

@section('title', 'Veja Todos Os Editais')

@section('content')

@include('layouts.navbar')

<div class="d-flex">

  @include('layouts.sidebar')

  <div class="content p-1">
    <div class="list-group-item">
      <div class="d-flex">
        <div class="mr-auto p-2">
          <h2 class="display-4 titulo">Editais</h2>
        </div>
      </div>

      @include('hintMessages')

      @if ($user->hasRole(['super-admin', 'orientador', 'membro', 'bolsista']))
      @can('create-edict')
      <div class="d-flex w-100 justify-content-end
        mx-0 my-2 {{ Request::route()->getName() === 'edicts.create' ? 'active' : '' }}">
        <a href="{{ route('edicts.create') }}" class="btn btn-outline-success">
          Inserir Edital
        </a>
      </div>
      @endcan
      @endif



      <div class="table-responsive">
        <table class="table table-striped table-hover table-bordered h-100">
          <thead>
            <tr>
              <th>ID</th>
              <th>Título</th>
              <th>Código</th>
              <th>Data</th>
              <th>Projetos</th>
              <th class="text-center">Ações</th>
            </tr>
          </thead>

          <tbody>
            @foreach ($edicts as $edict)

            @if($user->hasRole('super-admin', 'orientador', 'membro') || $user->id === $edict->users_id)
            <tr>
              <th>{{ $edict->id }}</th>
              <td>{{ $edict->edict_title }}</td>
              <td>{{ $edict->code }}</td>
              <td>{{ $edict->edict_year }}</td>
              <td>{{ count($edict->projects) }}</td>
              <td class="text-center">
                <div class="dropdown d-block">
                  <button class="btn btn-primary dropdown-toggle btn-sm w-100" type="button" id="acoesListar"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Opções
                  </button>
                  <div class="dropdown-menu dropdown-menu-right custom-overflow" aria-labelledby="acoesListar"
                    style="max-height: 90px;">

                    <a href="{{ route('edicts.showDashboard', $edict) }}" class="dropdown-item text-info">

                      Visualizar

                    </a>

                    <a href="{{ route('projects.form-attach-project', $edict) }}" class="dropdown-item text-success">

                      Anexar Projeto

                    </a>

                    <a href="{{ route('edicts.formUpdate', $edict) }}" class="dropdown-item text-warning">
                      Editar
                    </a>

                    <a href="{{ route('edicts.destroy', $edict) }}" class="dropdown-item text-danger"
                      onclick="return confirm('Você Deseja Excluir Este Edital?');">

                      Apagar

                    </a>

                  </div>
                </div>
              </td>
            </tr>

            @elseif($user->hasRole('bolsista') || $user->id === $edict->users_id)
            <tr>
              <th>{{ $edict->id }}</th>
              <td>{{ $edict->edict_title }}</td>
              <td>{{ $edict->code }}</td>
              <td>{{ $edict->edict_year }}</td>
              <td>{{ count($edict->projects) }}</td>
              <td class="text-center">

                <a href="{{ route('edicts.showDashboard', $edict) }}" class="btn btn-outline-info btn-sm w-100"
                  role="button" aria-pressed="true">Visualizar</a>
              </td>
            </tr>
            @endif

            @endforeach
          </tbody>
        </table>

      </div>
    </div>

  </div>

</div>

@endsection
