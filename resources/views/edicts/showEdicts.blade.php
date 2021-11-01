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

            <div class="table-responsive">
               <table class="table table-striped table-hover table-bordered">
                  <thead>
                     <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th class="d-none d-sm-table-cell">Código</th>
                        <th class="d-none d-lg-table-cell">Ano do Edital</th>
                        <th class="d-none d-lg-table-cell">Quantidade de Projetos</th>
                        <th class="text-center">Ações</th>
                     </tr>
                  </thead>

                  <tbody>
                     @foreach ($edicts as $edict)

                        <tr>
                           <th>{{ $edict->id }}</th>
                           <td>{{ $edict->title }}</td>
                           <td class="d-none d-sm-table-cell">{{ $edict->code }}</td>
                           <td class="d-none d-lg-table-cell">{{ $edict->edict_year }}</td>
                           <td class="d-none d-lg-table-cell">{{ count($edict->projects) }}</td>
                           <td class="text-center">
                              <span class="d-none d-md-block">

                                 @switch(Request::route()->getName())
                                    @case('edicts.showAll')
                                       <a href="{{ route('edicts.showDashboard', $edict) }}"
                                          class="btn btn-outline-success btn-sm">
                                          Visualizar
                                       </a>
                                    @break

                                    @case('edicts.projects')
                                       <a href="{{ route('projects.form-attach-project', $edict) }}"
                                          class="btn btn-outline-primary btn-sm">
                                          Anexar Projetos
                                       </a>
                                    @break

                                    @case('edicts.edit')
                                       <a href="{{ route('edicts.formUpdate', $edict) }}"
                                          class="btn btn-outline-warning btn-sm">
                                          Editar
                                       </a>
                                    @break

                                    @case('edicts.delete')
                                       <a href="{{ route('edicts.destroy', $edict) }}" class="btn btn-outline-danger btn-sm"
                                          onclick="return confirm('Você Deseja Excluir Este Edital?');">

                                            Apagar

                                       </a>
                                    @break

                                    @case('edicts.rate')

                                        <a href="" class="btn btn-outline-primary btn-sm"
                                            onclick="return confirm('Você Deseja Excluir Este Edital?');">

                                            Avaliar

                                        </a>
                                    @break


                                 @endswitch

                              </span>
                              <div class="dropdown d-block d-md-none">
                                 <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Ações
                                 </button>
                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">

                                    @switch(Request::route()->getName())
                                       @case('edicts.showAll')
                                          <a href="{{ route('edicts.showDashboard', $edict) }}" class="dropdown-item">

                                             Visualizar

                                          </a>
                                       @break

                                       @case('edicts.projects')
                                          <a href="{{ route('projects.form-attach-project', $edict) }}"
                                             class="dropdown-item">

                                             Anexar Projetos

                                          </a>
                                       @break

                                       @case('edicts.edit')
                                          <a href="{{ route('edicts.formUpdate', $edict) }}" class="dropdown-item">
                                             Editar
                                          </a>
                                       @break

                                       @case('edicts.delete')
                                          <a href="{{ route('edicts.destroy', $edict) }}" class="dropdown-item"
                                             onclick="return confirm('Você Deseja Excluir Este Edital?');">

                                             Apagar

                                          </a>
                                       @break


                                    @endswitch

                                 </div>
                              </div>
                           </td>
                        </tr>

                     @endforeach
                  </tbody>
               </table>

            </div>
         </div>

      </div>

   </div>

@endsection
