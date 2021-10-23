<nav class="navbar navbar-expand navbar-dark bg-dark">
   <a class="sidebar-toggle text-light mr-3">
      <span class="navbar-toggler-icon"></span>
   </a>

   <a class="navbar-brand" href="/">UNILAB</a>

   <div class="collapse navbar-collapse">
      <ul class="navbar-nav ml-auto">
         <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle menu-header" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">

               <span class="d-none d-sm-inline">{{ $user->name }}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">

               <a class="dropdown-item" href="/">
                  <i class="fas fa-home"></i>
                  Voltar Para Home
               </a>

               <a class="dropdown-item" href="/profile/show/{{ $user->id }}">
                  <i class="fas fa-eye"></i>
                  Visualizar Perfil
               </a>

               <a class="dropdown-item" href="/profile/edit/{{ $user->id }}">
                  <i class="fas fa-edit"></i>>
                  Editar Perfil
               </a>

               <form action="/logout" method="POST">
                  @csrf

                  <a class="dropdown-item" href="/logout" onclick="
                                event.preventDefault();
                                this.closest('form').submit();
                            ">
                     <i class="fas fa-sign-out-alt"></i>
                     Sair
                  </a>
               </form>
            </div>
         </li>
      </ul>
   </div>
</nav>