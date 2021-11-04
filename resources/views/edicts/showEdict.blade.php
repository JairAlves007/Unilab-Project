@extends('layouts.main')

@section('title', 'Veja Mais Sobre o Edital')

@section('content')

   @if (Request::route()->getName() === 'edicts.showHome')

      @include('layouts.navbarWelcome')

   @elseif(Request::route()->getName() === 'edicts.showDashboard')

      @include('layouts.navbar')

   @endif

   @if (Request::route()->getName() === 'edicts.showDashboard')
      <div class="d-flex">

         @include('layouts.sidebar')

         <div class="content p-1" id="content-p-1">

   @endif

   <div id="edicts-container">
      <div class="edicts-content">
         <h2>{{ $edict->title }}</h2>
         <p>{{ $edict->titulations->titulation }}</p>
         <p>{{ $edict->categories->name }}</p>
         <p> {{ date('d-m-Y', strtotime($edict->submission_start)) }} até
            {{ date('d-m-Y', strtotime($edict->submission_finish)) }}</p>
         <a href="/storage/{{ $edict->archive }}" class="btn btn-primary" id="event-submit"
            onclick="event.preventDefault();
                                                                                           this.closest('form').submit();">
            Baixar PDF
         </a>
      </div>

      <div class="edicts-description">
         <h4>Descrição</h4>
         <p>{{ $edict->description }}</p>
         <p>Autor: {{ $edict->ownerEdict->name }}</p>

         @if (Request::route()->getName() === 'edicts.showDashboard')
            <button type="button" id="btn-modal-rate" class="btn btn-primary btn-sm">
               @if ($rate)
                  Alterar Sua Avaliação
               @else
                  Avaliar
               @endif
            </button>
         @endif

      </div>
   </div>

   {{-- <iframe src="{{ url("/storage/{$edict->archive}") }}" frameborder="0"></iframe> --}}

   <h1 class="title-bold">
      Projetos Relacionados
   </h1>
   {{-- @dd($user->projectAsParticipant) --}}
   {{-- @dd(count($user->projectAsParticipant)) --}}

   <div class="table-width-controller">
      <div class="table table-responsive">
         <table class="table table-striped table-hover table-bordered" id="table-responsive">
            <thead>
               <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Título</th>
                  <th scope="col">Grande Área</th>
                  <th scope="col">Área</th>
                  <th scope="col">Sub-Área</th>
                  <th scope="col">Plano De Trabalho</th>

                  @if ($user && $user->student)
                     <th scope="col">
                        Ações
                     </th>
                  @endif

               </tr>
            </thead>

            <tbody>
               @forelse($projects_attachs as $project)
                  <tr>
                     <th scope="row">{{ $project->id }}</th>
                     <td>{{ $project->title }}</td>
                     <td>{{ $project->big_area->name }}</td>
                     <td>{{ $project->area->name }}</td>
                     <td>{{ $project->sub_area->name }}</td>

                     @if ($project->workPlan)

                        <td>{{ $project->workPlan->title }}</td>

                     @else

                        <td>Nenhum Plano De Trabalho</td>

                     @endif

                     @if ($user)
                        {{-- && $user->student && $user->student->users_id === $user->id --}}
                        @if($user->projectAsParticipant)
                           <td>
                              <form action="{{ route('projects.join', $project) }}" method="POST">
                                 @csrf

                                 <a href="{{ route('projects.join', $project) }}" class="btn btn-outline-primary"
                                    onclick="
                                          event.preventDefault();
                                          this.closest('form').submit();
                                       ">
                                    Candidatar
                                 </a>
                              </form>
                           </td>
                        @endif
                     @endif

                  </tr>

               @empty
                  <tr class="table-responsive-tr">
                     <th scope="row"></th>
                     <td>Nenhum Projeto Anexado</td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>

                     @if ($user && $user->student)
                        <td></td>
                     @endif

                  </tr>

               @endforelse

            </tbody>
         </table>
      </div>

   </div>

   @if (Request::route()->getName() === 'edicts.showDashboard')

      </div>
      </div>

      <div class="modal fade" id="modal-rate" tabindex="-1">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title">Avaliar O Edital "{{ $edict->title }}"</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <form action="{{ route('edicts.rate') }}" id="form-rate" method="POST">
                     @csrf

                     <input type="hidden" name="id" value="{{ $edict->id }}">

                     <div class="form-row">
                        <div class="form-group col-md-12">

                           <input type="radio" name="rate" value="1" id="rate1" class="form-check-input">
                           <label class="form-check-label" for="rate1">
                              1
                           </label>
                        </div>
                     </div>

                     <div class="form-row">
                        <div class="form-group col-md-12">

                           <input type="radio" name="rate" value="2" id="rate2" class="form-check-input">
                           <label class="form-check-label" for="rate2">
                              2
                           </label>
                        </div>
                     </div>

                     <div class="form-row">
                        <div class="form-group col-md-12">

                           <input type="radio" name="rate" value="3" id="rate3" class="form-check-input">
                           <label class="form-check-label" for="rate3">
                              3
                           </label>
                        </div>
                     </div>

                     <div class="form-row">
                        <div class="form-group col-md-12">

                           <input type="radio" name="rate" value="4" id="rate4" class="form-check-input">
                           <label class="form-check-label" for="rate4">
                              4
                           </label>
                        </div>
                     </div>

                     <div class="form-row">
                        <div class="form-group col-md-12">
                           <input type="radio" name="rate" value="5" id="rate5" class="form-check-input">
                           <label class="form-check-label" for="rate5">
                              5
                           </label>
                        </div>
                     </div>

                  </form>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                  <button type="submit" form="form-rate" class="btn btn-primary">Avalie</button>
               </div>
            </div>
         </div>
      </div>

   @endif

   <div class="other-rodape">

      @if (Request::route()->getName() === 'edicts.showHome')
         @include('layouts.footer')
      @endif

   </div>

   @if (Request::route()->getName() === 'edicts.showDashboard')
      @section('script')
         <script>
            $('#btn-modal-rate').click(() => {
               $('#modal-rate').modal({
                  show: true
               });
            });
         </script>
      @endsection
   @endif

@endsection
