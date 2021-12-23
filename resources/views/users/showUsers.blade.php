@extends('layouts.main')

@section('title', 'Usuários')

@section('content')

@include('layouts.navbar')

<div class="d-flex">

  @include('layouts.sidebar')

  <div class="content p-1">
    <div class="list-group-item">
      <div class="d-flex">
        <div class="mr-auto p-2">
          <h2 class="display-4 titulo">Usuários</h2>
        </div>
      </div>

      @include('hintMessages')

      @if ($user->hasRole(['super-admin', 'gestor']))
      @can('create-user')
      <div class="d-flex w-100 justify-content-end
      mx-0 my-2 {{ Request::route()->getName() === 'users.create' ? 'active' : '' }}">
        <a href="{{ route('users.create') }}" class="btn btn-outline-success">
          Inserir Usuários
        </a>
      </div>
      @endcan
      @endif

      <div class="table-responsive">
        <table class="table table-striped table-hover table-bordered">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nome</th>
              <th>E-mail</th>
              <th>Cadastro</th>
              <th class="text-center">Ações</th>
            </tr>
          </thead>

          <tbody>
            @foreach ($all_users as $user_checking)
            <tr>
              <th>{{ $user_checking->id }}</th>
              <td>{{ $user_checking->name }}</td>
              <td>{{ $user_checking->email }}</td>
              <td class="text-nowrap">{{ $user_checking->created_at }}</td>
              <td class="text-center">
                <div class="dropdown d-block">
                  <button class="btn btn-primary dropdown-toggle btn-sm w-100" type="button" id="acoesListar"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Opções
                  </button>
                  <div class="dropdown-menu dropdown-menu-right custom-overflow" aria-labelledby="acoesListar"
                    style="max-height: 90px;">
                    <a href="{{ route('users.showUser', $user_checking) }}"
                      class=" dropdown-item text-info">Visualizar</a>
                    @if ($user_checking->id !== $user->id)
                    <a href="{{ route('users.editAnUser', $user_checking) }}"
                      class="dropdown-item text-warning">Editar</a>
                    <a href="{{ route('users.destroy', $user_checking) }}" class="dropdown-item text-danger">Apagar</a>
                  </div>
                </div>
              </td>
            </tr>
            @endif
            @endforeach
          </tbody>
        </table>

      </div>

      {!! $all_users->links() !!}
    </div>
  </div>
</div>

@endsection
