@extends('layouts.main')

@section('title', 'Editar Usuário')

@section('content')
   @include('layouts.navbar')

   <div class="d-flex">
      @include('layouts.sidebar')

      <div class="content p-1">

         <div class="list-group-item">
            <div class="d-flex">
               <div class="mr-auto p-2">
                  <h2 class="display-4 titulo">Editar Usuário {{ $user_checking->name }}</h2>
               </div>

               @role('super-admin')
                  <div class="p-2">
                     <span class="d-none d-md-block">
                        <a href="/users/view" class="btn btn-outline-info btn-sm">Ver Usuários</a>

                        @if ($user_checking->id === $user->id)
                           <a href="/profile/show/{{ $user_checking->id }}"
                              class="btn btn-outline-primary btn-sm">Visualizar</a>
                        @else
                           <a href="/user/show/{{ $user_checking->id }}"
                              class="btn btn-outline-primary btn-sm">Visualizar</a>
                        @endif

                        @if ($user_checking->id !== $user->id)
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

                           @if ($user_checking->id === $user->id)
                              <a class="dropdown-item" href="/profile/show/{{ $user_checking->id }}">Visualizar</a>
                           @else
                              <a class="dropdown-item" href="/user/show/{{ $user_checking->id }}">Visualizar</a>
                           @endif

                           @if ($user_checking->id !== $user->id)
                              <a class="dropdown-item" href="apagar.html" data-toggle="modal"
                                 data-target="#apagarRegistro">Apagar</a>
                           @endif

                        </div>
                     </div>
                  </div>
               @endrole
            </div>

            <form method="POST" 
               @if ($user_checking->id == $user->id)
                  action="{{ route('profile_system.update', $user_checking) }}"
               @else
                  action="{{ route('users.update', $user_checking) }}"
               @endif
            >

               @csrf
               @method('PUT')

               <div class="form-row">

                  <div class="form-group col-md-6">

                     <x-jet-label for="name" value="{{ __('Nome') }}" />

                     <x-jet-input id="name" value="{{ $user_checking->name }}" class="form-control {{ ($errors->has('name')) ? 'is-invalid' : '' }}" type="text"
                        name="name" autofocus autocomplete="name" />

                     <div class="invalid-feedback">
                        @foreach ($errors->get('name') as $error)
                           {{ $error }}
                        @endforeach
                     </div>

                  </div>

                  <div class="form-group col-md-6">

                     <x-jet-label for="email" value="{{ __('Email') }}" />

                     <x-jet-input id="email" value="{{ $user_checking->email }}" class="form-control {{ ($errors->has('email')) ? 'is-invalid' : '' }}" type="email"
                        name="email" />

                     <div class="invalid-feedback">
                        @foreach ($errors->get('email') as $error)
                           {{ $error }}
                        @endforeach
                     </div>

                  </div>

               </div>

               <div class="form-row">
                  <div class="form-group col-md-6">

                     <x-jet-label for="password" value="{{ __('Senha') }}" />

                     <x-jet-input id="password" class="form-control {{ ($errors->has('password')) ? 'is-invalid' : '' }}" type="password" name="password"
                        autocomplete="new-password" />

                     <div class="invalid-feedback">
                        @foreach ($errors->get('password') as $error)
                           {{ $error }}
                        @endforeach
                     </div>

                  </div>

                  <div class="form-group col-md-6">
                     <x-jet-label for="password_confirmation" value="{{ __('Confirmar Senha') }}" />

                     <x-jet-input id="password_confirmation" class="form-control {{ ($errors->has('password_confirmation')) ? 'is-invalid' : '' }}" type="password"
                        name="password_confirmation" autocomplete="new-password" />

                     <div class="invalid-feedback">
                        @foreach ($errors->get('password_confirmation') as $error)
                           {{ $error }}
                        @endforeach
                     </div>

                  </div>
               </div>

               @if ($user->hasRole('super-admin') && $user_checking->id != $user->id)

                  <p>
                     <span class="text-danger">*</span> Campo obrigatório
                  </p>

                  @if($errors->has('niveis'))
                     <p class="text-danger">Marque Um Nível De Acesso</p>
                  @endif

                  <div class="form-row">

                     <div class="form-group col-md-12">

                        <div class="form-check">
                           <input class="form-check-input {{ ($errors->has('niveis')) ? 'is-invalid' : '' }}" type="checkbox" name="niveis[]" value="bolsista"
                              id="checkBolsista" 
                              
                              @if ($user_checking->hasRole('gestor'))
                                 checked 
                              @endif
                           >
                           
                           <label class="form-check-label" for="checkBolsista">
                              Gestor
                           </label>
                        </div>

                        <div class="form-check">
                           <input class="form-check-input {{ ($errors->has('niveis')) ? 'is-invalid' : '' }}" type="checkbox" name="niveis[]" value="bolsista"
                              id="checkBolsista" 
                              
                              @if ($user_checking->hasRole('bolsista'))
                                 checked 
                              @endif
                           >

                           <label class="form-check-label" for="checkBolsista">
                              Bolsista/Voluntário
                           </label>
                        </div>

                        <div class="form-check">
                           <input class="form-check-input {{ ($errors->has('niveis')) ? 'is-invalid' : '' }}" type="checkbox" name="niveis[]" value="orientador"
                              id="checkOrientador" 
                              
                              @if ($user_checking->hasRole('orientador')) 
                                 checked 
                              @endif
                           >

                           <label class="form-check-label" for="checkOrientador">
                              Orientador/Coordenador
                           </label>
                        </div>

                        <div class="form-check">
                           <input class="form-check-input {{ ($errors->has('niveis')) ? 'is-invalid' : '' }}" type="checkbox" name="niveis[]" value="membro" id="checkMembro"
                              @if ($user_checking->hasRole('membro'))
                                 checked 
                              @endif
                           >

                           <label class="form-check-label" for="checkMembro">
                              Membro da Comissão(CAPP)
                           </label>
                        </div>

                     </div>

                  </div>
               @endif

               <button type="submit" class="btn btn-primary">Editar</button>
            </form>
         </div>

      </div>
   </div>

   @role('super-admin')
      <form id="form-apagar" action="/user/delete/{{ $user_checking->id }}" method="POST">
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
                  <button type="submit" form="form-apagar" class="btn btn-danger">Apagar</button>
               </div>
            </div>
         </div>
      </div>
   @endrole
@endsection
