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
                     <input type="text" name="title" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}"
                        id="title">

                     <div class="invalid-feedback">
                        @foreach ($errors->get('title') as $error)
                           {{ $error }}
                        @endforeach
                     </div>

                  </div>

                  <div class="form-group">

                     <label for="content">Descrição Completa</label>

                     <textarea class="form-control {{ $errors->has('content') ? 'is-invalid' : '' }}" name="content"
                        id="content" rows="3"></textarea>

                     <div class="invalid-feedback">
                        @foreach ($errors->get('content') as $error)
                           {{ $error }}
                        @endforeach
                     </div>

                  </div>

                  <div class="form-group">

                     <label for="abstract">Descrição Resumida</label>

                     <textarea class="form-control {{ $errors->has('abstract') ? 'is-invalid' : '' }}" name="abstract"
                        id="abstract" rows="2"></textarea>

                     <div class="invalid-feedback">
                        @foreach ($errors->get('abstract') as $error)
                           {{ $error }}
                        @endforeach
                     </div>

                  </div>

                  <div class="form-group">

                     <label for="references">Referências</label>

                     <input type="url" name="references"
                        class="form-control {{ $errors->has('references') ? 'is-invalid' : '' }}" id="references">

                     <div class="invalid-feedback">
                        @foreach ($errors->get('references') as $error)
                           {{ $error }}
                        @endforeach
                     </div>

                  </div>
               </div>

               <div class="form-content">
                  <div class="form-row">

                     <div class="form-group">

                        <label for="archive">Arquivo do Projeto</label>

                        <input type="file" name="archive"
                           class="form-control-file {{ $errors->has('archive') ? 'is-invalid' : '' }}" id="archive">

                        <div class="invalid-feedback">
                           @foreach ($errors->get('archive') as $error)
                              {{ $error }}
                           @endforeach
                        </div>

                     </div>

                  </div>

                  <div class="form-row">

                     <div class="form-group col-md-6">

                        <label for="institutes">Instituto</label>

                        <select class="form-control {{ $errors->has('institutes') ? 'is-invalid' : '' }}"
                           name="institutes" id="institutes">
                           <option value="">
                              Selecione
                           </option>

                           @foreach ($institutes as $institute)
                              <option value="{{ $institute->id }}">
                                 {{ $institute->initials }} - {{ $institute->name }}
                              </option>
                           @endforeach
                        </select>

                        <div class="invalid-feedback">
                           @foreach ($errors->get('institutes') as $error)
                              {{ $error }}
                           @endforeach
                        </div>

                     </div>

                     <div class="form-group col-md-6">

                        <label for="specialities">Especialidades</label>

                        <select class="form-control {{ $errors->has('specialities') ? 'is-invalid' : '' }}"
                           name="specialities" id="specialities">
                           <option value="">
                              Selecione
                           </option>

                           @foreach ($specialities as $specialities)
                              <option value="{{ $specialities->id }}">{{ $specialities->name }}</option>
                           @endforeach
                        </select>

                        <div class="invalid-feedback">
                           @foreach ($errors->get('specialities') as $error)
                              {{ $error }}
                           @endforeach
                        </div>

                     </div>

                  </div>

                  <div class="form-row">

                     <div class="form-group col-md-6">

                        <label for="big_areas">Grande Área</label>

                        <select class="form-control {{ $errors->has('big_areas') ? 'is-invalid' : '' }}"
                           onchange="changeAreas(this)" data-url="{{ url('/project/findAreas') }}"
                           data-token="{{ csrf_token() }}" name="big_areas" id="big_areas">
                           <option value="">Selecione</option>

                           @foreach ($big_areas as $area)
                              <option value="{{ $area->id }}">
                                 {{ $area->name }}
                              </option>
                           @endforeach

                        </select>

                        <div class="invalid-feedback">
                           @foreach ($errors->get('big_areas') as $error)
                              {{ $error }}
                           @endforeach
                        </div>

                     </div>

                     <div class="form-group col-md-6">

                        <label for="areas">Área</label>

                        <select class="form-control {{ $errors->has('areas') ? 'is-invalid' : '' }}"
                           onchange="changeSubAreas(this)" data-url="{{ url('/project/findSubAreas') }}"
                           data-token="{{ csrf_token() }}" name="areas" id="areas" disabled>

                           <option value="">
                              Selecione
                           </option>

                        </select>

                        <div class="invalid-feedback">
                           @foreach ($errors->get('areas') as $error)
                              {{ $error }}
                           @endforeach
                        </div>

                     </div>

                  </div>

                  <div class="form-row">

                     <div class="form-group col-md-12">

                        <label for="sub_areas">Sub Área</label>

                        <select class="form-control {{ $errors->has('sub_areas') ? 'is-invalid' : '' }}"
                           name="sub_areas" id="sub_areas" disabled>
                           <option value="">
                              Selecione
                           </option>
                        </select>

                        <div class="invalid-feedback">
                           @foreach ($errors->get('sub_areas') as $error)
                              {{ $error }}
                           @endforeach
                        </div>
                     </div>
                  </div>

               </div>
            </div>

         </div>


            <button type="submit" class="btn btn-primary" id="btnFiltra">Anexar</button>
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
