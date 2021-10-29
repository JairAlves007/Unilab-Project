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
                        <th class="d-none d-lg-table-cell">Plano de Trabalho</th>
                        <th class="d-none d-lg-table-cell">Projeto vinculado</th>
                        <th class="text-center">Ações</th>
                     </tr>
                  </thead>

                  <tbody>
                     {{-- @foreach ($edicts as $edict) --}}

                        <tr>
                           <th>1</th>
                           <td>Bolsita</td>
                           <td class="d-none d-lg-table-cell">Cantar</td>
                           <td class="d-none d-lg-table-cell">sjkdskdjsdks</td>
                           <td class="text-center">
                                <a href="" class="btn btn-outline-danger btn-sm">
                                Aprovar
                                </a>
                            </td>
                        </tr>

                     {{-- @endforeach --}}
                  </tbody>
               </table>

            </div>
         </div>

      </div>

   </div>

@endsection
