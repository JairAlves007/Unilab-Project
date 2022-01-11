@extends('layouts.main')

@section('title', 'Anexe um Projeto')

@section('content')
@include('layouts.navbar')

@include('layouts.sidebar')

<div class="bg-white m-2">

  <h1 class="titulo">Anexe um Projeto</h1>

  <form class="form-type-4" action="{{ route('projects.attach-project', $edict) }}" method="POST"
    enctype="multipart/form-data">
    @csrf

    <div id="form-area">
      <div class="form-content">
        <div class="form-group">

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <label class="input-group-text" for="title">Título</label>
            </div>
            <input type="text" name="title" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}"
              id="title">

            <div class="invalid-feedback">
              @foreach ($errors->get('title') as $error)
              {{ $error }}
              @endforeach
            </div>
          </div>




        </div>

        <div class="form-group">

          <label class="input-group-text" for="content">Descrição Completa</label>

          <textarea class="form-control {{ $errors->has('content') ? 'is-invalid' : '' }}" name="content" id="content"
            rows="3"></textarea>

          <div class="invalid-feedback">
            @foreach ($errors->get('content') as $error)
            {{ $error }}
            @endforeach
          </div>

        </div>

        <div class="form-group">

          <label class="input-group-text" for="abstract">Descrição Resumida</label>

          <textarea class="form-control {{ $errors->has('abstract') ? 'is-invalid' : '' }}" name="abstract"
            id="abstract" rows="2"></textarea>

          <div class="invalid-feedback">
            @foreach ($errors->get('abstract') as $error)
            {{ $error }}
            @endforeach
          </div>

        </div>

        <div class="form-group">





          <label class="input-group-text" for="references">Referências</label>
          <textarea name="references" class="form-control {{ $errors->has('references') ? 'is-invalid' : '' }}"
            id="references" rows="2"></textarea>

          <div class="invalid-feedback">
            @foreach ($errors->get('references') as $error)
            {{ $error }}
            @endforeach
          </div>
        </div>

        <div class="form-content">
          <div class="form-row">
            <div class="col">
              <div class="form-group">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupFileAddon01">Arquivo do Projeto</span>
                  </div>
                  <div class="custom-file">

                    <input id="input-file" type="file" name="archive"
                      class="custom-file-input {{ $errors->has('archive') ? 'is-invalid' : '' }}" id="archive"
                      style="z-index: 2 !important">
                    <label id="file-name" class="custom-file-label text-left mb-0" for="archive" data-browse="&#128269">

                      <div class="text-danger">
                        @foreach ($errors->get('archive') as $error)
                        {{ $error }}
                        @endforeach
                      </div>
                      Selecione um arquivo

                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="form-row">

            <div class="form-group col-md-6">

              <label class="input-group-text" for="institutes">Instituto</label>

              <select class="form-control {{ $errors->has('institutes') ? 'is-invalid' : '' }}" name="institutes"
                id="institutes">
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

              <label class="input-group-text" for="specialities">Especialidades</label>

              <select class="form-control {{ $errors->has('specialities') ? 'is-invalid' : '' }}" name="specialities"
                id="specialities">
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

              <label class="input-group-text" for="big_areas">Grande Área</label>

              <select class="form-control {{ $errors->has('big_areas') ? 'is-invalid' : '' }}"
                onchange="changeAreas(this)" data-url="{{ url('/project/findAreas') }}" data-token="{{ csrf_token() }}"
                name="big_areas" id="big_areas">
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

              <label class="input-group-text" for="areas">Área</label>

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

              <label class="input-group-text" for="sub_areas">Sub Área</label>

              <select class="form-control {{ $errors->has('sub_areas') ? 'is-invalid' : '' }}" name="sub_areas"
                id="sub_areas" disabled>
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

          {{-- <div class="form-row">
            <div class="form-group col-md-12">

              <label for="orientador">Orientador do Projeto</label>

              <select class="form-control {{ $errors->has('teachers') ? 'is-invalid' : '' }}" name="teachers"
                id="orientador">
                <option value="">Selecione</option>

                @foreach ($teachers_users as $teacher)
                <option value="{{ $teacher->id }}">
                  {{ $teacher->name }} - {{ $teacher->registration }}
                </option>
                @endforeach
              </select>

              <div class="invalid-feedback">
                @foreach ($errors->get('teachers') as $error)
                {{ $error }}
                @endforeach
              </div>
            </div>
          </div> --}}

        </div>
      </div>

      <button type="submit" class="btn btn-success"><i class="fas fa-file-upload" aria-hidden="true"></i> Anexar</button>
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

<script>
  $('#input-file').change(()=>{
    var label = document.getElementById("file-name");
    var input = document.getElementById("input-file");

    if(input.files.length > 0){
      label.innerHTML = input.files[0].name;
    }
  });
</script>


<script>
  tinymce.init({
    selector: 'textarea',
    plugins: 'a11ychecker advcode casechange export formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
    toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter pageembed permanentpen table',
    toolbar_mode: 'floating',
    tinycomments_mode: 'embedded',
    tinycomments_author: 'Author name',
  });
</script>
@endsection

@endsection
