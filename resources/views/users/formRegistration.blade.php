<form action="{{ route('users.registration-store') }}" method="POST">
   @csrf

   <input type="text" name="registration" placeholder="Matrícula">

   @if(Request::route()->getName() === 'users.registration.orientador')

      <select name="institutes_id" id="institutes">

         <option value="">Selecione</option>

         @if(isset($institutes))
            @foreach ($institutes as $institute)
               <option value="{{ $institute->id }}">{{ $institute->name }}</option>
            @endforeach
         @endif

      </select>

   @endif

   <button type="submit">Enviar</button>
</form>
