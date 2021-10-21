<nav class="navbar navbar-expand navbar-dark bg-dark">
    <a class="sidebar-toggle text-light mr-3">
        <span class="navbar-toggler-icon"></span>
    </a>

    <a class="navbar-brand" href="/">UNILAB</a>

    <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle menu-header" href="#" id="navbarDropdownMenuLink"
                    data-toggle="dropdown">
                    
                    <span class="d-none d-sm-inline"><?php echo e($user->name); ?></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">

                    <a class="dropdown-item" href="/">
                        <i class="fas fa-home"></i>
                        Voltar Para Home
                    </a>

                    <a class="dropdown-item" href="/profile/edit/<?php echo e($user->id); ?>">
                        <i class="fas fa-user"></i>
                        Editar Perfil
                    </a>

                    <a class="dropdown-item" href="/profile/show/<?php echo e($user->id); ?>">
                        <i class="fas fa-user"></i>
                        Visualizar Perfil
                    </a>

                    <form action="/logout" method="POST">
                        <?php echo csrf_field(); ?>

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
<?php /**PATH C:\Users\Linguas_05\Documents\Unilab\Unilab-Project\resources\views/layouts/navbar.blade.php ENDPATH**/ ?>