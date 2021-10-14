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
   {{-- @forelse ($projects_attachs as $project)
   <div class="document">
      <div class="document-info">
         <i class="far fa-file-pdf fa-lg"></i>

         <span>
            {{ $project->title }}
         </span>
      </div>
      <div class="document-download">
         <a href="/public/docs/edicts/phpGCR6nJ.pdf" class="btn btn-success">
            <i class="fas fa-download"></i>
         </a>
         <a href="project/show/{{ $project->id }}" class="btn btn-outline-primary">
            Ver Mais
         </a>
      </div>

   </div>
   @empty
   <p>
      Não Existe Nenhum Projeto Relacionado à esse Edital
   </p>
   @endforelse --}}
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
               <th scope="row">1</th>
               <td>Mark</td>
               <td>Otto</td>
               <td>@mdo</td>
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