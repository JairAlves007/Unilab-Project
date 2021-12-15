@extends('layouts.main')

@section('title', 'Veja Todas as Frequências')

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
                      @if($user->hasRole('bolsista') || $user->id === $edict->users_id)
                         <tr>
                            <th>{{ $edict->id }}</th>
                            <td>{{ $edict->edict_title }}</td>
                            <td class="d-none d-sm-table-cell">{{ $edict->code }}</td>
                            <td class="d-none d-lg-table-cell">{{ $edict->edict_year }}</td>
                            <td class="d-none d-lg-table-cell">{{ count($edict->projects) }}</td>
                            <td class="text-center">