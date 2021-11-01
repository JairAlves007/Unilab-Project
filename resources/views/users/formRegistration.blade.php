<form action="{{ route('users.registration-store') }}" method="POST">
   @csrf

   @if ($user->hasRole('bolsista'))
      <input type="text" name="registrations[]" placeholder="Matrícula Como Bolsista">
   @endif

   @if ($user->hasRole('orientador'))
      <input type="text" name="registrations[]" placeholder="Matrícula Como Orientador">
   @endif

   <button type="submit">Enviar</button>
</form>
