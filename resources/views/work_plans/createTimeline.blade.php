@extends('layouts.main')

@section('content')

@section('title', 'Cronograma')

@include('layouts.navbar')

@include('layouts.sidebar')

<div class="bg-white m-1 px-2 py-3">
    <div class="container">
        <div class="row">
            <div class="col">
                <h4 class="display-4 titulo mb-0">Cronograma de Atividades</h4>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <form action="">
                    <div class="d-flex justify-content-end my-1">
                        <div class="btn-group mr-2 timeline-btn-top-group" role="group">
                            <button type="submit" class="btn btn-outline-success">
                                <i class="fas fa-calendar-plus"></i> Criar
                            </button>
                        </div>
                    </div>

                    <div>
                        <table
                            class="
                    table
                    table-bordered
                    table-responsive
                    table-striped
                    table-hover
                    p-0
                  ">
                            <thead>
                                <tr class="date">
                                    <th class="timeline-td">Atividades</th>

                                </tr>

                               
                            </thead>

                            <tbody id="table-row">


                                <tr>
                                    <td class="d-flex align-items-start timeline-th"
                                        style="text-align: center; vertical-align: middle">
                                        <button id="btn-remove  type=" button" class="btn btn-outline-danger mr-2"
                                            title="Remover Atividade">
                                            <i class="fas fa-minus-circle"></i>
                                        </button>
                                        
                                        <textarea class="form-control timeline-textarea" name="" id="" cols="25"
                                            rows="1" maxlength="50" placeholder="Máx.50"></textarea>
                                    </td>
                                    <td class="timeline-td" style="text-align: center; vertical-align: middle">
                                        <input class="input-group" type="checkbox" id="" />
                                    </td>
                                    <td class="timeline-td" style="text-align: center; vertical-align: middle">
                                        <input class="input-group" type="checkbox" id="" />
                                    </td>
                                    <td class="timeline-td" style="text-align: center; vertical-align: middle">
                                        <input class="input-group" type="checkbox" id="" />
                                    </td>
                                    <td class="timeline-td" style="text-align: center; vertical-align: middle">
                                        <input class="input-group" type="checkbox" id="" />
                                    </td>
                                    <td class="timeline-td" style="text-align: center; vertical-align: middle">
                                        <input class="input-group" type="checkbox" id="" />
                                    </td>
                                    <td class="timeline-td" style="text-align: center; vertical-align: middle">
                                        <input class="input-group" type="checkbox" id="" />
                                    </td>
                                    <td class="timeline-td" style="text-align: center; vertical-align: middle">
                                        <input class="input-group" type="checkbox" id="" />
                                    </td>
                                    <td class="timeline-td" style="text-align: center; vertical-align: middle">
                                        <input class="input-group" type="checkbox" id="" />
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center timeline-td">
                            <button type="button" id="btn-add" class="btn btn-outline-success w-100"
                                title="Adcionar Atividade" onclick="Criar()">
                                <i class="fas fa-plus-circle"></i>
                            </button>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center m-1">
                        <div class="btn-group w-100" role="group" aria-label="Second group">
                            <button type="button" class="btn btn-outline-primary" title="Anterior">
                                <i class="fas fa-angle-double-left"></i>
                            </button>
                            <button type="button" class="btn btn-outline-primary" title="Atual">
                                <i class="fas fa-home"></i>
                            </button>
                            <button type="button" class="btn btn-outline-primary" title="Posterior">
                                <i class="fas fa-angle-double-right"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@section('script')
  <script>
    $(document).ready(() => {
      var scntbody = $('#table-row');
      var id;

      // var = a ['opa', 'oi'];

      // for(let i = 0; i<a.length;i++){
      //   console.log('funfou');
      // }

      $('#btn-add').click(function(e) {
        e.preventDefault();
        $("#table-row").append(`
          <tr>
            <td class="d-flex align-items-start timeline-th" style="text-align: center; vertical-align: middle">
              <button id="btn-remove" type="button" class="btn btn-outline-danger mr-2" title="Remover Atividade" >
                <i class="fas fa-minus-circle"></i>
              </button>
              <textarea class="form-control timeline-textarea" name="" id="" cols="25" rows="1" maxlength="50"
                placeholder="Máx.50"></textarea>
            </td>
            <td class="timeline-td" style="text-align: center; vertical-align: middle">
              <input class="input-group" type="checkbox" id="" />
            </td>
            <td class="timeline-td" style="text-align: center; vertical-align: middle">
              <input class="input-group" type="checkbox" id="" />
            </td>
            <td class="timeline-td" style="text-align: center; vertical-align: middle">
              <input class="input-group" type="checkbox" id="" />
            </td>
            <td class="timeline-td" style="text-align: center; vertical-align: middle">
              <input class="input-group" type="checkbox" id="" />
            </td>
            <td class="timeline-td" style="text-align: center; vertical-align: middle">
              <input class="input-group" type="checkbox" id="" />
            </td>
            <td class="timeline-td" style="text-align: center; vertical-align: middle">
              <input class="input-group" type="checkbox" id="" />
            </td>
            <td class="timeline-td" style="text-align: center; vertical-align: middle">
              <input class="input-group" type="checkbox" id="" />
            </td>
            <td class="timeline-td" style="text-align: center; vertical-align: middle">
              <input class="input-group" type="checkbox" id="" />
            </td>
          </tr>
        `);
      });

      $(document).on('click', '#btn-remove', function(e) {
        $(this).parents('tr').remove();
        return false;
      })
    });
  </script>
@endsection


@endsection