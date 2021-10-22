<nav class="navbar navbar-expand-lg navbar-dark bg-blue">
   <a class="navbar-brand d-flex align-items-center" href="/">
      <img class="rounded-circle mr-3" src="/imagem/unilabsimbolo.png" width="30" height="30">
      UNILAB
   </a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse dark" id="navbarNav">
      <ul class="navbar-nav">
         <li class="nav-item active">
            <a class="nav-link dark" href="#">Editais</a>
         </li>
         
         <li class="nav-item">
            <a class="nav-link" href="#">Projetos</a>
         </li>
         
         <li class="nav-item">
            <a class="nav-link" href="#">Sobre</a>
         </li>

         <li class="nav-item" id="menu">
            @if (!$user)
               <a class="nav-link dropdown-toggle dropdown-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  Entrar
               </a>
               <div class="dropdown-menu" id="menu-navbar-welcome" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="/register">
                     <i class="fas fa-user-plus"></i>
                     Cadastrar
                  </a>
                  <a class="dropdown-item" href="/login">
                     <i class="fas fa-sign-in-alt mr-2"></i>
                     Login
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