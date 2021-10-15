@extends('layouts.main')

@section('title', 'Anexe um Projeto')

@section('content')
   @include('layouts.navbar')

   <div class="d-flex">

      @include('layouts.sidebar')

      <div class="form-create">
         <h1>Anexe Um Projeto</h1>

         <form action="{{ route('projects.attach-project', $edict) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div id="form-area">
               <div class="form-content">
                  <div class="form-group">
                     <label for="title">Título</label>
                     <input 
                        type="text" 
                        name="title" 
                        class="form-control" 
                        id="title" 
                        required
                     >
                  </div>

                  <div class="form-group">
                     <label for="content">Descrição Completa</label>
                     <textarea 
                        class="form-control" 
                        name="content" 
                        id="content" 
                        rows="3" 
                        required
                     ></textarea>
                  </div>

                  <div class="form-group">
                     <label for="abstract">Descrição Resumida</label>
                     <textarea 
                        class="form-control" 
                        name="abstract" 
                        id="abstract" 
                        rows="2"
                        required
                     ></textarea>
                  </div>

                  <div class="form-group">
                     <label for="references">Referências</label>
                     <input 
                        type="text" 
                        name="references" 
                        class="form-control" 
                        id="references"
                        required
                     >
                  </div>
               </div>

               <div class="form-content">
                  <div class="form-row">

                     <div class="form-group">
                        <label for="archive">Arquivo do Projeto</label>
                        <input 
                           type="file" 
                           name="archive" 
                           class="form-control-file" 
                           id="archive"
                           required
                        >
                     </div>

                  </div>

                  <div class="form-row">

                     <div class="form-group col-md-6">
                        <label for="institutes">Instituto</label>
                        <select 
                           class="form-control" 
                           name="institutes" 
                           id="institutes"
                           required
                        >
                           <option value="">
                              Selecione
                           </option>

                           @foreach ($institutes as $institute)
                              <option value="{{ $institute->id }}">
                                 {{ $institute->initials }} - {{ $institute->name }}
                              </option>
                           @endforeach
                        </select>
                     </div>

                     <div class="form-group col-md-6">
                        <label for="specialities">Especialidades</label>
                        <select 
                           class="form-control" 
                           name="specialities" 
                           id="specialities"
                           required
                        >
                           <option value="">
                              Selecione
                           </option>

                           @foreach ($specialities as $specialities)
                              <option value="{{ $specialities->id }}">{{ $specialities->name }}</option>
                           @endforeach
                        </select>
                     </div>

                  </div>

                  <div class="form-row">
                     <div class="form-group col-md-6">
                        <label for="big_areas">Grande Área</label>
                        <select 
                           class="form-control" 
                           onchange="changeAreas(this)"
                           data-url="{{ url('/project/findAreas') }}" 
                           data-token="{{ csrf_token() }}" 
                           name="big_areas"
                           id="big_areas" 
                           required
                        >
                           <option value="">Selecione</option>

                           @foreach ($big_areas as $area)
                              <option value="{{ $area->id }}">
                                 {{ $area->name }}
                              </option>
                           @endforeach

                        </select>
                     </div>

                     <div class="form-group col-md-6">
                        <label for="areas">Área</label>
                        <select 
                           class="form-control" 
                           onchange="changeSubAreas(this)"
                           data-url="{{ url('/project/findSubAreas') }}" 
                           data-token="{{ csrf_token() }}" 
                           name="areas"
                           id="areas" 
                           required
                           disabled
                        >

                           <option value="">
                              Selecione
                           </option>

                        </select>
                     </div>

                  </div>

                  <div class="form-row">
                     <div class="form-group col-md-12">
                        <label for="sub_areas">Sub Área</label>
                        <select 
                           class="form-control" 
                           name="sub_areas" 
                           id="sub_areas"
                           required 
                           disabled
                        >
                           <option value="">
                              Selecione
                           </option>
                        </select>
                     </div>
                  </div>

               </div>
            </div>

            <button type="submit" class="btn btn-primary">Anexar</button>
         </form>
      </div>

   </div>

   @section('script')
      <script>
         function changeAreas(response) {
            $.ajax({
               url: $(response).data('url'),
               type: 'post',
               data: {
                  _method: 'post',
                  _token: $(response).data('token'),
                  big_areas_id: response.value
               },
               
               success: function(res) {
                  $("#areas").empty();

                  $("#sub_areas").empty();

                  $("#areas").removeAttr('disabled');
                  
                  $("#sub_areas").prop('disabled', 'true');

                  $('#areas').append($('<option>', {
                     value: "",
                     text: "Selecione"
                  }));

                  $('#sub_areas').append($('<option>', {
                     value: "",
                     text: "Selecione"
                  }));

                  $.each(res, function(index, value) {
                     $('#areas').append($('<option>', {
                        value: value['id'],
                        text: value['name']
                     }));
                  });
               },
               error: function() {
                  alert('error');
               },
            });
         }

         function changeSubAreas(response) {
            $.ajax({
               url: $(response).data('url'),
               type: 'post',
               data: {
                  _method: 'post',
                  _token: $(response).data('token'),
                  sub_areas_id: response.value
               },
               success: function(res) {
                  $("#sub_areas").empty();

                  $("#sub_areas").removeAttr('disabled');

                  $('#sub_areas').append($('<option>', {
                     value: "",
                     text: "Selecione"
                  }));

                  $.each(res, function(index, value) {
                     $('#sub_areas').append($('<option>', {
                        value: value['id'],
                        text: value['name']
                     }));
                  });
               },
               error: function() {
                  alert('error');
               },
            });
         }
      </script>
   @endsection
   
@endsection