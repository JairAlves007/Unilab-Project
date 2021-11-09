@extends('layouts.main')

@section('title', 'Veja Mais Sobre Seu Plano De Trabalho')

@section('content')

   @include('layouts.navbar')

   <div class="d-flex">

      @include('layouts.sidebar')

      <div class="content p-1">
         <div class="list-group-item">
            <div class="d-flex">
               <div class="mr-auto p-2">
                  <p class="titulo"><i class="fas fa-user m-2"></i> <b>Bolsista:</b>
                     {{ $user_work_plans->first()->name }}</p>
               </div>

            </div>

            <hr color="gray">

            <dl class="row">
               <dt class="col-sm-3 text-left"><i class="fas fa-angle-right"></i> Título
                  <hr color="gray">
               </dt>
               <dd class="col-sm-9 text-left"> {{ $work_plans_attachs->first()->title }}
                  <hr color="gray">
               </dd>

               <dt class="col-sm-3 text-left"><i class="fas fa-angle-right"></i> Abstract
                  <hr color="gray">
               </dt>
               <dd class="col-sm-9 text-left"> {{ $work_plans_attachs->first()->abstract }}
                  <hr color="gray">
               </dd>

               <dt class="col-sm-3 text-left"><i class="fas fa-angle-right"></i> Contéudo
                  <hr color="gray">
               </dt>
               <dd class="col-sm-9 text-left"> {{ $work_plans_attachs->first()->content }}
                  <hr color="gray">
               </dd>

               <dt class="col-sm-3 text-truncate text-left"><i class="fas fa-angle-right"></i> Referências
                  <hr color="gray">
               </dt>
               <dd class="col-sm-9 text-left"> {{ $work_plans_attachs->first()->references }}
                  <hr color="gray">
               </dd>
            </dl>
         </div>
      </div>
   </div>

@endsection
