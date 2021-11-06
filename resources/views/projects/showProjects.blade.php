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
                  <h2 class="display-4 titulo">Projetos</h2>
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
                        <th class="d-none d-lg-table-cell">Edital Anexado</th>
                        <th class="d-none d-lg-table-cell">Dono Do Projeto</th>
                        <th class="text-center">Ações</th>
                     </tr>
                  </thead>

                  <tbody>
                     @foreach ($projects as $project)
                        <tr>
                           <th>{{ $project->id }}</th>
                           <td>{{ $project->title }}</td>
                           <td class="d-none d-sm-table-cell">{{ $project->code }}</td>
                           <td class="d-none d-lg-table-cell">{{ $project->edict->title }}</td>
                           <td class="d-none d-lg-table-cell">{{ $ownerProject->name }} - {{ $ownerProject->registration }}</td>
                           <td class="text-center">
                              <span class="d-none d-md-block">

                                 <a href="{{ route('works_plans.create', $project) }}" class="btn btn-outline-success btn-sm">
                                    Adicionar Plano de Trabalho
                                 </a>

                              </span>

                              <div class="dropdown d-block d-md-none">
                                 <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Ações
                                 </button>

                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">

                                    <a href="{{ route('works_plans.create', $project) }}" class="dropdown-item">
                                       Adicionar Plano De Trabalho
                                    </a>

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
