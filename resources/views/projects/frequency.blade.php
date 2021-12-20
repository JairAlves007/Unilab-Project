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
          <div class="col-md-12">
            <!-- Select -->

            <div class="input-group mb-3 col-md-9 mx-auto">
              <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">
                  Bolsista
                </label>
                <input type="text" class="custom-select">
              </div>
            </div>
            
            <div class="input-group mb-3 col-md-9 mx-auto">
              <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">
                  Edital
                </label>
              </div>
              <select class="custom-select" id="inputGroupSelect01">
                <option selected>--Selecione um Edital</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <!-- /Select -->
            <!-- Select -->
            <div class="input-group mb-3 col-md-9 mx-auto">
              <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">
                  Orientador
                </label>
              </div>
              <select class="custom-select" id="inputGroupSelect01">
                <option selected>--Selecione o Orientador</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <!-- /Select -->
            <!-- Select -->
          
            <!-- /Select -->
            <!-- text -->
            <div class="input-group mb-3 col-md-9 mx-auto">
              <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">
                  Mês de Referência:
                </label>  
                <select class="custom-select" id="inputGroupSelect01" required="required">
                  <option value="Fevereiro/2022">Fevereiro/2022</option>
                  <option value="Março/2022">Março/2022</option>
                  <option value="Abril/2022">Abril/2022</option>
                  <option value="Dezembro/2022" selected>Dezembro/2021</option>
                		</select>
              </div>
            </div>
          </div>
          <!-- /Select groupS -->

          <!-- 1st Week -->
          <div class="col-md-12 mt-5">
            <div class="col-md-12 p-1">
              <h3 class="display-4 head-2 text-center">1ª Semana</h3>
            </div>
          </div>
          <!-- Containers 1 -->
          <div class="">
            <!-- Row group 1 -->
            <div class="container">
              <div class="row"></div>
            </div>
            <!-- /Row group 1 -->
          </div>
          <!-- /Containers 1 -->
         
          <div class="col-md-12">
            <div class="container">
              <div class="row">
                <div class="col">
                  <b>Dia</b> 
                </div>          
                <div class="col">
                  <b>Hora de Início</b>
                </div>
                <div class="col">
                  <b>Hora de Término</b>
                </div>
                <div class="col">
                  <b>Total de horas</b>
                </div>
                <div class="col">
                <b>Descrição da atividade (Max. 40 caracteres)</b>               
                </div>
              </div>
            
            
              <div class="row">
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <textarea
                    maxlength="40"
                    class="form-control form-week-input"
                    name=""
                    id=""
                    cols="30"
                    rows="10"
                  ></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <textarea
                    maxlength="40"
                    class="form-control form-week-input"
                    name=""
                    id=""
                    cols="30"
                    rows="10"
                  ></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <textarea
                    maxlength="40"
                    class="form-control my-1 form-week-input"
                    name=""
                    id=""
                    cols="25"
                    rows="10"
                  ></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <textarea
                    maxlength="40"
                    class="form-control form-week-input"
                    name=""
                    id=""
                    cols="30"
                    rows="10"
                  ></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <textarea
                    maxlength="40"
                    class="form-control form-week-input"
                    name=""
                    id=""
                    cols="30"
                    rows="10"
                  ></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <textarea
                    maxlength="40"
                    class="form-control form-week-input"
                    name=""
                    id=""
                    cols="30"
                    rows="10"
                  ></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <textarea
                    maxlength="40"
                    class="form-control form-week-input"
                    name=""
                    id=""
                    cols="30"
                    rows="10"
                  ></textarea>
                </div>
              </div>
            </div>
          </div>
          <!-- /1st Week -->

          <!-- 2nd Week -->
          <div class="col-md-12 mt-5">
            <div class="col-md-12 p-1">
              <h3 class="display-4 head-2 text-center">2ª Semana</h3>
            </div>
          </div>
          <!-- Containers 1 -->
          <div class="">
            <!-- Row group 1 -->
            <div class="container">
              <div class="row"></div>
            </div>
            <!-- /Row group 1 -->
          </div>
          <!-- /Containers 1 -->
          <div class="col-md-12">
            <div class="container">
              <div class="row">
                <div class="col">
                  <b>Dia</b>
                </div>
                <div class="col">
                  <b>Hora de Início</b>
                </div>
                <div class="col">
                  <b>Hora de Término</b>
                </div>
                <div class="col">
                  <b>Total de horas</b>
                </div>
                <div class="col">
                  <b>Descrição da atividade (Max. 40 caracteres)</b>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <textarea
                    maxlength="40"
                    class="form-control form-week-input"
                    name=""
                    id=""
                    cols="30"
                    rows="10"
                  ></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <textarea
                    maxlength="40"
                    class="form-control form-week-input"
                    name=""
                    id=""
                    cols="30"
                    rows="10"
                  ></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <textarea
                    maxlength="40"
                    class="form-control form-week-input"
                    name=""
                    id=""
                    cols="30"
                    rows="10"
                  ></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <textarea
                    maxlength="40"
                    class="form-control form-week-input"
                    name=""
                    id=""
                    cols="30"
                    rows="10"
                  ></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <textarea
                    maxlength="40"
                    class="form-control form-week-input"
                    name=""
                    id=""
                    cols="30"
                    rows="10"
                  ></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <textarea
                    maxlength="40"
                    class="form-control form-week-input"
                    name=""
                    id=""
                    cols="30"
                    rows="10"
                  ></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <textarea
                    maxlength="40"
                    class="form-control form-week-input"
                    name=""
                    id=""
                    cols="30"
                    rows="10"
                  ></textarea>
                </div>
              </div>
            </div>
          </div>
          <!-- /2nd Week -->

          <!-- 3rd Week -->
          <div class="col-md-12 mt-5">
            <div class="col-md-12 p-1">
              <h3 class="display-4 head-2 text-center">3ª Semana</h3>
            </div>
          </div>
          <!-- Containers 1 -->
          <div class="">
            <!-- Row group 1 -->
            <div class="container">
              <div class="row"></div>
            </div>
            <!-- /Row group 1 -->
          </div>
          <!-- /Containers 1 -->
          <div class="col-md-12">
            <div class="container">
              <div class="row">
                <div class="col">
                  <b>Dia</b>
                </div>
                <div class="col">
                  <b>Hora de Início</b>
                </div>
                <div class="col">
                  <b>Hora de Término</b>
                </div>
                <div class="col">
                  <b>Total de horas</b>
                </div>
                <div class="col">
                  <b>Descrição da atividade (Max. 40 caracteres)</b>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <textarea
                    maxlength="40"
                    class="form-control form-week-input"
                    name=""
                    id=""
                    cols="30"
                    rows="10"
                  ></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <textarea
                    maxlength="40"
                    class="form-control form-week-input"
                    name=""
                    id=""
                    cols="30"
                    rows="10"
                  ></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <textarea
                    maxlength="40"
                    class="form-control form-week-input"
                    name=""
                    id=""
                    cols="30"
                    rows="10"
                  ></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <textarea
                    maxlength="40"
                    class="form-control form-week-input"
                    name=""
                    id=""
                    cols="30"
                    rows="10"
                  ></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <textarea
                    maxlength="40"
                    class="form-control form-week-input"
                    name=""
                    id=""
                    cols="30"
                    rows="10"
                  ></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <textarea
                    maxlength="40"
                    class="form-control form-week-input"
                    name=""
                    id=""
                    cols="30"
                    rows="10"
                  ></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <textarea
                    maxlength="40"
                    class="form-control form-week-input"
                    name=""
                    id=""
                    cols="30"
                    rows="10"
                  ></textarea>
                </div>
              </div>
            </div>
          </div>
          <!-- /3rd Week -->

          <!-- 4th Week -->
          <div class="col-md-12 mt-5">
            <div class="col-md-12 p-1">
              <h3 class="display-4 head-2 text-center">4ª Semana</h3>
            </div>
          </div>
          <!-- Containers 1 -->
          <div class="">
            <!-- Row group 1 -->
            <div class="container">
              <div class="row"></div>
            </div>
            <!-- /Row group 1 -->
          </div>
          <!-- /Containers 1 -->
          <div class="col-md-12">
            <div class="container">
              <div class="row">
                <div class="col">
                  <b>Dia</b>
                </div>
                <div class="col">
                  <b>Hora de Início</b>
                </div>
                <div class="col">
                  <b>Hora de Término</b>
                </div>
                <div class="col">
                  <b>Total de horas</b>
                </div>
                <div class="col">
                  <b>Descrição da atividade (Max. 40 caracteres)</b>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <textarea
                    maxlength="40"
                    class="form-control form-week-input"
                    name=""
                    id=""
                    cols="30"
                    rows="10"
                  ></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <textarea
                    maxlength="40"
                    class="form-control form-week-input"
                    name=""
                    id=""
                    cols="30"
                    rows="10"
                  ></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <textarea
                    maxlength="40"
                    class="form-control form-week-input"
                    name=""
                    id=""
                    cols="30"
                    rows="10"
                  ></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <textarea
                    maxlength="40"
                    class="form-control form-week-input"
                    name=""
                    id=""
                    cols="30"
                    rows="10"
                  ></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <textarea
                    maxlength="40"
                    class="form-control form-week-input"
                    name=""
                    id=""
                    cols="30"
                    rows="10"
                  ></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <textarea
                    maxlength="40"
                    class="form-control form-week-input"
                    name=""
                    id=""
                    cols="30"
                    rows="10"
                  ></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    name=""
                    id=""
                    class="form-control my-1 form-week-input"
                  />
                </div>
                <div class="col">
                  <textarea
                    maxlength="40"
                    class="form-control form-week-input"
                    name=""
                    id=""
                    cols="30"
                    rows="10"
                  ></textarea>
                </div>
              </div>
            </div>
          </div>
          <!-- /4th Week -->

          <div class="text-center m-5">
            <button type="submit" class="btn btn-success">Gerar PDF</button>
          </div>
        </form>
      </div>
      <!-- /Master container -->
    </div>
    <!-- /Div global -->



 @endsection