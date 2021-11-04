<nav class="navbar navbar-expand-lg navbar-dark bg-blue">

    <img class="rounded-circle" src="/imagem/unilabsimbolo.png" width="30" height="30">
    <a class="navbar-brand" href="/">UNILAB</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse dark" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Editais <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Projetos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/sobre">Sobre</a>
            </li>


         <li class="nav-item" id="menu"> --}}

         <li class="nav-item" id="menu">


            <?php if(!$user): ?>
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
            <?php else: ?>

               <a class="nav-link d-flex justify-content-center align-items-center" href="/dashboard">
                  <i class="fa fa-folder-open mr-2" aria-hidden="true"></i>
                  Dashboard
               </a>

            <?php endif; ?>
         </li>

      </ul>
   </div>
</nav>
<?php /**PATH C:\Users\Fabio Gabriel\Desktop\Unilab-Project\resources\views/layouts/navbarWelcome.blade.php ENDPATH**/ ?>