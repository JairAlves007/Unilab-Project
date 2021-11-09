@extends('layouts.main')

@section('title', 'Veja Mais Sobre Seu Plano De Trabalho')

@section('content')

   @include('layouts.navbar')

   <div class="d-flex">

      @include('layouts.sidebar')

      <div class="content p-1">
         <div class="list-group-item">



            @forelse ($work_plans_attachs as $wp)
               @if (in_array($user->id, $wp->bolsistas))
                  <div class="d-flex">
                     <div class="mr-auto p-2">
                        <p class="titulo"><i class="fas fa-user m-2"></i>
                           <b>Bolsistas Participantes: </b>
                           
                           @for($i = 0; $i < count($bolsistas_participants); $i++)
                              @if ($i < count($bolsistas_participants) - 1)
                                 {{ $bolsistas_participants[$i]->name }},
                              @else
                                 {{ $bolsistas_participants[$i]->name }}
                              @endif
                           @endfor
                        </p>
                     </div>

                  </div>

                  <hr color="gray">

                  <dl class="row">
                     <dt class="col-sm-3 text-left"><i class="fas fa-angle-right"></i> Título
                        <hr color="gray">
                     </dt>
                     <dd class="col-sm-9 text-left"> {{ $wp->title }}
                        <hr color="gray">
                     </dd>

                     <dt class="col-sm-3 text-left"><i class="fas fa-angle-right"></i> Abstract
                        <hr color="gray">
                     </dt>
                     <dd class="col-sm-9 text-left"> {{ $wp->abstract }}
                        <hr color="gray">
                     </dd>

                     <dt class="col-sm-3 text-left"><i class="fas fa-angle-right"></i> Contéudo
                        <hr color="gray">
                     </dt>
                     <dd class="col-sm-9 text-left"> {{ $wp->content }}
                        <hr color="gray">
                     </dd>

                     <dt class="col-sm-3 text-truncate text-left"><i class="fas fa-angle-right"></i> Referências
                        <hr color="gray">
                     </dt>
                     <dd class="col-sm-9 text-left">
                        <a href="{{ $wp->references }}" target="_blank">Referências</a>
                        <hr color="gray">
                     </dd>
                  </dl>
               @endif

            @empty

               <p>não existe nenhum plano de trabalho anexado a este projeto</p>

            @endforelse

         </div>
      </div>
   </div>

@endsection
