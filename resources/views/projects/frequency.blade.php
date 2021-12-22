@extends('layouts.main')

@section('content')

@section('title', 'Frequência')

@include('layouts.navbar')

<!-- Div global -->
<div class="d-flex">

  @include('layouts.sidebar')

  <!-- Master container -->
  <div class="container-fluid bg-white m-1 p-1">
    <!-- Header -->
    <div class="col-md-12 p-1">
      <h2 class="display-4 titulo text-center">Frequência do Bolsista</h2>
    </div>
    <!-- /Header -->
    <form action="">
      <!-- Select group -->
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <!-- Select -->

            <div class="row">
              <div class="col">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">
                      Bolsista
                    </label>
                  </div>
                  <select class="custom-select" id="inputGroupSelect01">
                    <option selected>Escolha um Orientador</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">
                      Edital
                    </label>
                  </div>
                  <select class="custom-select" id="inputGroupSelect01">
                    <option selected>Selecione um Edital</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
              </div>
            </div>
            <!-- /Select -->
            <!-- Select -->
            <div class="row">
              <div class="col">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">
                      Orientador
                    </label>
                  </div>
                  <select class="custom-select" id="inputGroupSelect01">
                    <option selected>Selecione o Orientador</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
              </div>
            </div>
            <!-- /Select -->
            <!-- Select -->

            <!-- /Select -->
            <!-- text -->
            <div class="row">
              <div class="col">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Mês de Referência</label>
                  </div>
                  <select class="custom-select" id="inputGroupSelect01" required="required">
                    <option value="Fevereiro/2022">Fevereiro/2022</option>
                    <option value="Março/2022">Março/2022</option>
                    <option value="Abril/2022">Abril/2022</option>
                    <option value="Dezembro/2022" selected>Dezembro/2021</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <!-- /Select groupS -->
        </div>
      </div>

      <!-- 1st Week -->
      <div class="col-md-12 mt-5">
        <div class="col-md-12 p-1">
          <h3 class="display-4 head-2 text-center">1ª Semana</h3>
        </div>
      </div>

      <div class="col-md-12">
        <div class="container">
          <div class="row">
            <div class="col col-frequency-container">
              <b>Dia</b>

              <input type="date" name="" id="" class="form-control my-1 form-week-input" />
              <input type="date" name="" id="" class="form-control my-1 form-week-input" />
              <input type="date" name="" id="" class="form-control my-1 form-week-input" />
              <input type="date" name="" id="" class="form-control my-1 form-week-input" />
              <input type="date" name="" id="" class="form-control my-1 form-week-input" />
              <input type="date" name="" id="" class="form-control my-1 form-week-input" />
              <input type="date" name="" id="" class="form-control my-1 form-week-input" />
            </div>
            <div class="col col-frequency-container">
              <b>Hora de Início</b>

              <input type="time" name="" id="" class="form-control my-1 form-week-input" />
              <input type="time" name="" id="" class="form-control my-1 form-week-input" />
              <input type="time" name="" id="" class="form-control my-1 form-week-input" />
              <input type="time" name="" id="" class="form-control my-1 form-week-input" />
              <input type="time" name="" id="" class="form-control my-1 form-week-input" />
              <input type="time" name="" id="" class="form-control my-1 form-week-input" />
              <input type="time" name="" id="" class="form-control my-1 form-week-input" />
            </div>
            <div class="col col-frequency-container">
              <b>Hora de Término</b>

              <input type="time" name="" id="" class="form-control my-1 form-week-input" />
              <input type="time" name="" id="" class="form-control my-1 form-week-input" />
              <input type="time" name="" id="" class="form-control my-1 form-week-input" />
              <input type="time" name="" id="" class="form-control my-1 form-week-input" />
              <input type="time" name="" id="" class="form-control my-1 form-week-input" />
              <input type="time" name="" id="" class="form-control my-1 form-week-input" />
              <input type="time" name="" id="" class="form-control my-1 form-week-input" />
            </div>
            <div class="col col-frequency-container">
              <b>Total de horas</b>

              <div class="form-control my-1 form-week-input">
                <p></p>
              </div>
              <div class="form-control my-1 form-week-input">
                <p></p>
              </div>
              <div class="form-control my-1 form-week-input">
                <p></p>
              </div>
              <div class="form-control my-1 form-week-input">
                <p></p>
              </div>
              <div class="form-control my-1 form-week-input">
                <p></p>
              </div>
              <div class="form-control my-1 form-week-input">
                <p></p>
              </div>
              <div class="form-control my-1 form-week-input">
                <p></p>
              </div>
            </div>
            <div class="col col-frequency-container">
              <b>Descrição da atividade</b>

              <textarea maxlength="40" class="form-control form-week-textarea my-1" name="" id="" cols="30" rows="1"
                placeholder="Máx. 40 caracteres"></textarea>
              <textarea maxlength="40" class="form-control form-week-textarea my-1" name="" id="" cols="30" rows="1"
                placeholder="Máx. 40 caracteres"></textarea>
              <textarea maxlength="40" class="form-control form-week-textarea my-1" name="" id="" cols="30" rows="1"
                placeholder="Máx. 40 caracteres"></textarea>
              <textarea maxlength="40" class="form-control form-week-textarea my-1" name="" id="" cols="30" rows="1"
                placeholder="Máx. 40 caracteres"></textarea>
              <textarea maxlength="40" class="form-control form-week-textarea my-1" name="" id="" cols="30" rows="1"
                placeholder="Máx. 40 caracteres"></textarea>
              <textarea maxlength="40" class="form-control form-week-textarea my-1" name="" id="" cols="30" rows="1"
                placeholder="Máx. 40 caracteres"></textarea>
              <textarea maxlength="40" class="form-control form-week-textarea my-1" name="" id="" cols="30" rows="1"
                placeholder="Máx. 40 caracteres"></textarea>
            </div>
          </div>
        </div>
      </div>
      <!-- /1st Week -->

      <div class="text-center m-5">
        <button type="submit" class="btn btn-success">Gerar PDF</button>
      </div>
    </form>
  </div>
  <!-- /Master container -->
</div>
<!-- /Div global -->



@endsection
