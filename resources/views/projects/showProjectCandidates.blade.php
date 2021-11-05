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
                        <th>Matrícula</th>
                        <th>Nome</th>
                        <th class="text-center">Ações</th>
                     </tr>
                  </thead>

                  <tbody>
                     @foreach ($projects as $project)

                        <tr>
                           <th>{{ $project->id }}</th>
                           <td>{{ $project->title }}</td>
                           <td class="text-center">
                              <a href="{{ route('projects.candidates', $project) }}" class="btn btn-outline-danger btn-sm">
                                 Ver Candidatos
                              </a>
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
