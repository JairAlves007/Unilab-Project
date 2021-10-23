@extends('layouts.main')

@section('title', 'Registre-se')

@section('content')

   @include('layouts.navbar')

   <div class="d-flex">

      @include('layouts.sidebar')

      <div class="content p-1">
         <div class="list-group-item">

            <h1>Cadastre Um Usuário</h1>

            <br>

            <form method="POST" action="{{ route('users.store') }}">
               @csrf

               <div class="form-row">
                  <div class="form-group col-md-6">
                     <x-jet-label for="name" value="{{ __('Nome') }}" />
                     <x-jet-input id="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                        type="text" name="name" :value="old('name')" autofocus autocomplete="name" />

                     <div class="invalid-feedback">
                        @foreach ($errors->get('name') as $error)
                           {{ $error }}
                        @endforeach
                     </div>
                  </div>

                  <div class="form-group col-md-6">
                     <x-jet-label for="email" value="{{ __('Email') }}" />
                     <x-jet-input id="email" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                        type="email" name="email" :value="old('email')" />
                     <div class="invalid-feedback">
                        @foreach ($errors->get('email') as $error)
                           {{ $error }}
                        @endforeach
                     </div>
                  </div>
               </div>

               <div class="form-row">
                  <div class="form-group col-md-6">
                     <x-jet-label for="password" value="{{ __('Senha') }}" />
                     <x-jet-input id="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                        type="password" name="password" autocomplete="new-password" />
                     <div class="invalid-feedback">
                        @foreach ($errors->get('password') as $error)
                           {{ $error }}
                        @endforeach
                     </div>
                  </div>

                  <div class="form-group col-md-6">
                     <x-jet-label for="password_confirmation" value="{{ __('Confirmar Senha') }}" />
                     <x-jet-input id="password_confirmation"
                        class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}"
                        type="password" name="password_confirmation" autocomplete="new-password" />
                     <div class="invalid-feedback">
                        @foreach ($errors->get('password_confirmation') as $error)
                           {{ $error }}
                        @endforeach
                     </div>
                  </div>
               </div>

               <p>
                  <span class="text-danger">*</span>Campo obrigatório
               </p>

               @if ($errors->has('niveis'))
                  <p class="text-danger">Marque Um Nível De Acesso</p>
               @endif

               <div class="form-row">

                  <div class="form-group col-md-12">

                     <div class="form-check">

                        <input class="form-check-input {{ $errors->has('niveis') ? 'is-invalid' : '' }}"
                           type="checkbox" name="niveis[]" value="bolsista" id="checkBolsista">
                        <label class="form-check-label" for="checkBolsista">
                           Bolsista/Voluntário
                        </label>
                     </div>

                     <div class="form-check">
                        <input class="form-check-input {{ $errors->has('niveis') ? 'is-invalid' : '' }}"
                           type="checkbox" name="niveis[]" value="orientador" id="checkOrientador">
                        <label class="form-check-label" for="checkOrientador">
                           Orientador/Coordenador
                        </label>
                     </div>

                     <div class="form-check">
                        <input class="form-check-input {{ $errors->has('niveis') ? 'is-invalid' : '' }}"
                           type="checkbox" name="niveis[]" value="membro" id="checkMembro">
                        <label class="form-check-label" for="checkMembro">
                           Membro da Comissão(CAPP)
                        </label>
                     </div>

                     <div class="invalid-feedback">
                        @foreach ($errors->get('niveis') as $error)
                           {{ $error }}
                        @endforeach
                     </div>

                  </div>
               </div>

               @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                  <div class="mt-4">
                     <x-jet-label for="terms">
                        <div class="flex items-center">
                           <x-jet-checkbox name="terms" id="terms" />

                           <div class="ml-2">
                              {!! __('I agree to the :terms_of_service and :privacy_policy', [
    'terms_of_service' => '<a target="_blank" href="' . route('terms.show') . '" class="underline text-sm text-gray-600 hover:text-gray-900">' . __('Terms of Service') . '</a>',
    'privacy_policy' => '<a target="_blank" href="' . route('policy.show') . '" class="underline text-sm text-gray-600 hover:text-gray-900">' . __('Privacy Policy') . '</a>',
]) !!}
                           </div>
                        </div>
                     </x-jet-label>
                  </div>
               @endif

               <div class="flex items-center justify-end mt-4">
                  <button type="submit" class="btn btn-lg btn-primary">Cadastrar</button>
               </div>
            </form>
         </div>
      </div>

   </div>

@endsection
