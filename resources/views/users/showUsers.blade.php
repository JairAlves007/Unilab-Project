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

      <div class="table-responsive">
        <table class="table table-striped table-hover table-bordered">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nome</th>
              <th class="d-none d-sm-table-cell">E-mail</th>
              <th class="d-none d-lg-table-cell">Data do Cadastro</th>
              <th class="text-center">Ações</th>
            </tr>
          </thead>

          <tbody>
            @foreach ($all_users as $user_checking)
            <tr>
              <th>{{ $user_checking->id }}</th>
              <td>{{ $user_checking->name }}</td>
              <td class="d-none d-sm-table-cell">{{ $user_checking->email }}</td>
              <td class="d-none d-lg-table-cell">{{ $user_checking->created_at }}</td>
              <td class="text-center">
                <span class="d-none d-md-block">
                  @if (Route::currentRouteName() == 'users.view')
                  <a href="{{ route('users.showUser', $user_checking) }}"
                    class="btn btn-outline-info btn-sm">Visualizar</a>

                  @elseif(Route::currentRouteName() == 'users.edit')

                  @if ($user_checking->id !== $user->id)
                  <a href="{{ route('users.editAnUser', $user_checking) }}"
                    class="btn btn-outline-warning btn-sm">Editar</a>
                  @else
                  <a href="{{ route('profile.edit', $user) }}" class="btn btn-outline-warning btn-sm">Editar</a>
                  @endif

                  @elseif(Route::currentRouteName() == 'users.delete')

                  <a href="{{ route('users.destroy', $user_checking) }}" class="btn btn-outline-danger btn-sm"
                    onclick="return confirm('Você Realmente Deseja Excluir Este Usuário?');">

                    Apagar

                  </a>

                  @endif

                </span>
                <div class="dropdown d-block d-md-none">
                  <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Ações
                  </button>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">
                    @if (Route::currentRouteName() == 'users.view')
                    <a href="{{ route('users.showUser', $user_checking) }}" class=" dropdown-item">Visualizar</a>

                    @elseif(Route::currentRouteName() == 'users.edit')

                    @if ($user_checking->id !== $user->id)
                    <a href="{{ route('users.editAnUser', $user_checking) }}" class="dropdown-item">Editar</a>
                    @else
                    <a href="{{ route('profile.edit', $user) }}" class="dropdown-item">Editar</a>
                    @endif
                    @elseif(Route::currentRouteName() == 'users.delete')
                    <a href="{{ route('users.destroy', $user_checking) }}" class="dropdown-item">Apagar</a>
                    @endif
                  </div>
                </div>
              </td>
            </tr>

            @endforeach
          </tbody>
        </table>

      </div>

      {!! $all_users->links() !!}
    </div>
  </div>
</div>

@endsection
