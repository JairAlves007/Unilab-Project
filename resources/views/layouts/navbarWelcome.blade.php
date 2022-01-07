{{--  <nav class="navbar navbar-expand-lg navbar-dark bg-blue">
  <a class="navbar-brand d-flex align-items-center" href="/">
    <img class="rounded-circle mr-3" src="/imagem/unilabsimbolo.png" style="width: 40px; height: 40px">
    UNILAB
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
    aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse dark" id="navbarNav">
    <ul class="navbar-nav">

      <li class="nav-item" id="menu">

        @if (!$user)
        <a class="nav-link dropdown-toggle dropdown-link" href="#" id="navbarDropdown" role="button"
          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Entrar
        </a>
        <div class="dropdown-menu" id="menu-navbar-welcome" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/register">
            <i class="fas fa-user-plus"></i>
            Cadastrar
          </a>
          <a class="dropdown-item" href="/login">
            <i class="fas fa-sign-in-alt mr-2"></i>
            Entrar
          </a>
        </div>
        @else

        <a class="nav-link d-flex justify-content-center align-items-center" href="/dashboard">
          <i class="fa fa-folder-open mr-2" aria-hidden="true"></i>
          Dashboard
        </a>

        @endif
      </li>
    </ul>
  </div>
</nav>  --}}


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand d-flex align-items-center" href="/">
    <img class="rounded-circle mr-3" src="/imagem/unilabsimbolo.png" style="width: 40px; height: 40px">
    UNILAB
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown" id="wellcomeDropdown">

        @if (!$user)
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
          aria-expanded="false">
          Entrar
        </a>
        <div class="dropdown-menu dropdownMenuWellcome" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/register">
            <i class="fas fa-user-plus"></i>
            Cadastrar
          </a>
          <a class="dropdown-item" href="/login">
            <i class="fas fa-sign-in-alt mr-2"></i>
            Entrar
          </a>
        </div>
        @else
        <a class="nav-link d-flex justify-content-center align-items-center" href="/dashboard">
          <i class="fa fa-folder-open mr-2" aria-hidden="true"></i>
          Dashboard
        </a>
        @endif
      </li>
    </ul>
  </div>
</nav>

<div style="padding-bottom: 80px"></div>
