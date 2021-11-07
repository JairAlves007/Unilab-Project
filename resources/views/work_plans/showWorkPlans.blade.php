@extends('layouts.main')

@section('content')
   
   @forelse ($work_plans_attachs as $wp)
      @if(in_array($user->id, $wp->bolsistas))   
         <div id="edicts-container">
            <div class="edicts-content">
               <h2>{{ $wp->title }}</h2>
               <p></p>
               <p></p>
            </div>
      
            <div class="edicts-description">
               <h4>Descrição</h4>
               <p></p>
               <p>Autor: </p>
      
            </div>
         </div>
      @else
         <p>você não foi anexado a nenum plano de trabalho desse projeto</p>
      @endif

   @empty

      <p>não existe nenhum plano de trabalho anexado a este projeto</p>

   @endforelse
@endsection
