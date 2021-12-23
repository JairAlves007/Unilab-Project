@extends('layouts.main')

@section('title', 'Veja Os Candidatos Dos Projetos')

@section('content')

@include('layouts.navbar')

<div class="d-flex">

  @include('layouts.sidebar')

  <div class="content p-1">
    <div class="list-group-item">
      <div class="d-flex">
        <div class="mr-auto p-2">
          <h2 class="display-4 titulo">Candidatos aos Projetos</h2>
        </div>
      </div>

      @include('hintMessages')

      <div class="table-responsive">
        <table class="table table-striped table-hover table-bordered">
          <thead>
            <tr>
              <th>ID</th>
              <th>Título Do Projeto</th>
              <th>Edital Anexado</th>
              <th>Codígo</th>
              <th class="text-center">Ações</th>
            </tr>
          </thead>

          <tbody>
            @foreach ($projects as $project)
            @if($project->teachers_id === $user->id)
            <tr>
              <td>{{ $project->id }}</td>
              <td>{{ $project->title }}</td>
              <td>
                {{-- {{ $project->edict->edict_title }} --}}
              </td>
              <td>{{ $project->code }}</td>
              <td class="text-center">
                <a href="{{ route('projects.candidates', $project) }}" class="btn btn-outline-info btn-sm">
                  Ver Candidatos
                </a>
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
