{{-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img class="rounded-circle" src="/imagem/unilabsimbolo.png" width="30" height="30">
            <a class="title-logo" href="#">Unilab</a>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

                <li class="nav-item">
                    <a class="nav-link" href="#">Editais</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Projetos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sobre</a>
                </li>
                <li class="nav-item dropdown md-auto" id="menu">
                    @if (!$user)
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Entrar
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/register">Cadastrar</a>
                            <a class="dropdown-item" href="/login">Logar</a>
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
    </div>
</nav> --}}
<nav class="navbar navbar-expand-lg navbar-dark bg-blue">
    <img class="rounded-circle" src="/imagem/unilabsimbolo.png" width="30" height="30">
    <a class="navbar-brand" href="/">UNILAB</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse dark" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link dark" href="#">Editais <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Projetos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Sobre</a>
            </li>
            @if (!$user)
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Entrar
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/register">Cadastrar</a>
                    <a class="dropdown-item" href="/login">Login</a>
                </div>
            @else
                <a class="nav-link d-flex justify-content-center align-items-center" href="/dashboard">
                    <i class="fa fa-folder-open mr-2" aria-hidden="true"></i>
                    Dashboard
                </a>
            @endif

        </ul>
    </div>
</nav>
