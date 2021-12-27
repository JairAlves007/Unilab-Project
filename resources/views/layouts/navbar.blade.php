<nav class="navbar navbar-expand navbar-dark bg-dark">
  <a class="sidebar-toggle text-light mr-3">
    <span class="navbar-toggler-icon"></span>
  </a>

  <a class="navbar-brand" href="/">
    <img class="rounded-circle mr-3" src="/imagem/unilabsimbolo.png" style="width: 40px; height: 40px">
    UNILAB
  </a>

  <div class="collapse navbar-collapse">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle menu-header" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">

          <span class="d-none d-sm-inline">
            <i class="fas fa-user-circle m-1"></i>
            {{ $user->name }}
          </span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">

          <a class="dropdown-item" href="/">
            <i class="fas fa-home"></i>
            Início
          </a>

          <a class="dropdown-item" href="{{ route('profile_system.show', $user) }}">
            <i class="fas fa-eye"></i>
            Visualizar Perfil
          </a>

          <a class="dropdown-item" href="{{ route('profile_system.edit', $user) }}">
            <i class="fas fa-edit"></i>
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
<div style="padding-bottom: 80px"></div>
