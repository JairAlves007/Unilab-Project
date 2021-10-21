@extends('layouts.main')

@section('title', 'Mostrar Usuário')

@include('layouts.navbar')

@section('content')

   <div class="d-flex">
      @role('gestor')
         @include('layouts.sidebar')
      @endrole

      <div class="content p-1">
         <div class="list-group-item">
            <div class="d-flex">
               <div class="mr-auto p-2">
                  <h2 class="display-4 titulo">Usuário {{ $user_checking->name }}</h2>
               </div>

               @role('gestor')
                  <div class="p-2">
                     <span class="d-none d-md-block">
                        <a href="/users/view" class="btn btn-outline-info btn-sm">Ver Usuários</a>

                        @if($user_checking->id !== $user->id)
                           <a href="{{ route('user.editAnUser', $user_checking) }}" class="btn btn-outline-warning btn-sm">Editar</a>
                        @else
                           <a href="{{ route('profile.edit', $user) }}" class="btn btn-outline-warning btn-sm">Editar</a>
                        @endif

                        @if($user_checking->id !== $user->id)
                           <a href="apagar.html" class="btn btn-outline-danger btn-sm" data-toggle="modal"
                              data-target="#apagarRegistro">Apagar</a>
                        @endif
                     </span>

                     <div class="dropdown d-block d-md-none">
                        <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           Ações
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">
                           <a class="dropdown-item" href="/users/view">Ver Usuários</a>

                           @if($user_checking->id !== $user->id)
                              <a class="dropdown-item" href="{{ route('user.editAnUser', $user_checking) }}">Editar</a>
                           @else
                              <a class="dropdown-item" href="{{ route('profile.edit', $user) }}">Editar</a>
                           @endif

                           @if($user_checking->id !== $user->id)
                              <a class="dropdown-item" href="apagar.html" data-toggle="modal"
                                 data-target="#apagarRegistro">Apagar</a>
                           @endif

                        </div>
                     </div>
                  </div>
               @endrole
            </div>

            <hr>
            <hr>

            <dl class="row">
               <dt class="col-sm-3">ID</dt>
               <dd class="col-sm-9">{{ $user_checking->id }}</dd>

               <dt class="col-sm-3">Nome</dt>
               <dd class="col-sm-9">{{ $user_checking->name }}</dd>

               <dt class="col-sm-3">Email</dt>
               <dd class="col-sm-9">{{ $user_checking->email }}</dd>

               <dt class="col-sm-3">Níveis No Sistema</dt>
               <dd class="col-sm-9" style="text-transform: capitalize;">
                  @for($i = 0; $i < count($user_roles); $i++)
                     @if($i < count($user_roles) - 1)
                        {{ $user_roles[$i]->name }},
                     @else
                        {{ $user_roles[$i]->name }}
                     @endif
                  @endfor
               </dd>

               <dt class="col-sm-3 text-truncate">Data do Cadastro</dt>
               <dd class="col-sm-9">{{ $user_checking->created_at }}</dd>
            </dl>
         </div>
      </div>
   </div>

   @role('gestor')
      <form id="form-apagar" action="{{ route('users.destroy', $user_checking) }}" method="POST">
         @csrf
         @method('DELETE')
      </form>

      <div class="modal fade" id="apagarRegistro" tabindex="-1" role="dialog" aria-labelledby="apagarRegistroLabel"
         aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
                  <div class="modal-header bg-danger text-white">
                     <h5 class="modal-title" id="exampleModalLabel">EXCLUIR ITEM</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
                  <div class="modal-body">
                     Tem certeza de que deseja excluir o item selecionado?
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
                     <button href="submit" form="form-apagar" class="btn btn-danger">Apagar</button>
                  </div>
            </div>
         </div>
      </div>
   @endrole
@endsection
