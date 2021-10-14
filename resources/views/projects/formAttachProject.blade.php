@extends('layouts.main')

@section('title', 'pirulito.debug')

@section('content')
   @include('layouts.navbar')

   <div class="d-flex">

      @include('layouts.sidebar')

      {{-- Tabela... --}}

      <div class="form-create">
         <h1>Anexe Um Projeto</h1>

         <form action="{{ route('projects.attach-project', $edict) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div id="form-area">
               <div class="form-content">
                  <div class="form-group">
                     <label for="title">Título</label>
                     <input type="text" name="title" class="form-control" id="title">
                  </div>

                  <div class="form-group">
                     <label for="content">Descrição Completa</label>
                     <textarea class="form-control" name="content" id="content" rows="3"></textarea>
                  </div>

                  <div class="form-group">
                     <label for="abstract">Descrição Resumida</label>
                     <textarea class="form-control" name="abstract" id="abstract" rows="2"></textarea>
                  </div>

                  <div class="form-group">
                     <label for="references">Referências</label>
                     <input type="text" name="references" class="form-control" id="references">
                  </div>
               </div>

               <div class="form-content">
                  <div class="form-row">

                     <div class="form-group">
                        <label for="archive">Arquivo do Projeto</label>
                        <input type="file" name="archive" class="form-control-file" id="archive">
                     </div>

                  </div>

                  <div class="form-row">

                     <div class="form-group col-md-6">
                        <label for="institutes">Instituto</label>
                        <select class="form-control" name="institutes" id="institutes">
                           @foreach ($institutes as $institute)
                              <option value="{{ $institute->id }}">{{ $institute->name }} - {{ $institute->initials }}</option>
                           @endforeach
                        </select>
                     </div>

                     <div class="form-group col-md-6">
                        <label for="specialities">Especialidades</label>
                        <select class="form-control" name="specialities" id="specialities">
                           @foreach ($specialities as $specialities)
                              <option value="{{ $specialities->id }}">{{ $specialities->name }}</option>
                           @endforeach
                        </select>
                     </div>

                  </div>

                  <div class="form-row">
                     <div class="form-group col-md-6">
                        <label for="big_areas">Grande Área</label>
                        <select class="form-control" name="big_areas" id="big_areas">
                           @foreach ($big_areas as $area)
                              <option value="{{ $area->id }}">{{ $area->name }}</option>
                           @endforeach
                        </select>
                     </div>
                     
                     <div class="form-group col-md-6">
                        <label for="areas">Área</label>
                        <select class="form-control" name="areas" id="areas">
                           @foreach ($areas as $area)
                              <option value="{{ $area->id }}">{{ $area->name }}</option>
                           @endforeach
                        </select>
                     </div>
                     
                  </div>

                  <div class="form-row">
                     <div class="form-group col-md-12">
                        <label for="sub_areas">Sub Área</label>
                        <select class="form-control" name="sub_areas" id="sub_areas">
                           @foreach ($sub_areas as $area)
                              <option value="{{ $area->id }}">{{ $area->name }}</option>
                           @endforeach
                        </select>
                     </div>
                  </div>

               </div>
            </div>

            <button type="submit" class="btn btn-primary">Anexar</button>
         </form>
      </div>

   </div>
@endsection
