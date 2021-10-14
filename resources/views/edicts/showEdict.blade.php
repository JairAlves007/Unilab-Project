@extends('layouts.main')

@section('title', 'Veja Mais Sobre o Edital')

@section('content')

   @include('layouts.navbarWelcome')

   <div id="edicts-container">
      <div class="edicts-content">
         <h2>{{ $edict->title }}</h2>
         <p>{{ $edict->titulations->titulation }}</p>
         <p>{{ $edict->categories->name }}</p>
         <p> {{ date('d-m-Y', strtotime($edict->submission_start)) }} até
            {{ date('d-m-Y', strtotime($edict->submission_finish)) }}</p>
         <a href="/events/join/" class="btn btn-primary" id="event-submit" onclick="event.preventDefault();
                         this.closest('form').submit();">
            Baixar PDF
         </a>
      </div>

      <div class="edicts-description">
         <h4>Descrição</h4>
         <p>{{ $edict->description }}</p>
         <p>Autor: Não está relacionado</p>
      </div>
   </div>
   {{-- <iframe src="{{ url("/storage/{$edict->archive}") }}" frameborder="0"></iframe> --}}

   <h1 class="title-bold">
      Projetos Relacionados
   </h1>

   <div id="documents-container">
      <div class="table-responsive">
         <table class="table table-striped table-hover table-bordered">
            <thead>
               <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Título</th>
                  <th scope="col">Grande Área</th>
                  <th scope="col">Área</th>
                  <th scope="col">Sub-Área</th>
                  <th scope="col">Ações</th>
               </tr>
            </thead>

            <tbody>
               @forelse($projects_attachs as $project)
                  <tr>
                     <th scope="row">{{ $project->id }}</th>
                     <td>{{ $project->title }}</td>
                     <td>{{ $project->big_area->name }}</td>
                     <td>{{ $project->area->name }}</td>
                     <td>{{ $project->sub_area->name }}</td>
                     <td>Aleatorio</td>
                  </tr>

               @empty
                  <tr>
                     <th scope="row"></th>
                     <td>Nenhum projeto relacionado</td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                  </tr>

               @endforelse

            </tbody>
         </table>
      </div>

   </div>

   @include('layouts.footer')

@endsection
