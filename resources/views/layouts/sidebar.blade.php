<nav class="sidebar">
    <ul class="list-unstyled">

        <li>
            <a href="/dashboard">
                <i class="fas fa-tachometer-alt"></i>
                Dashboard
            </a>
        </li>

        @if ($user->hasRole(['super-admin', 'orientador']))
            <li>

                <a href="#submenu1" data-toggle="collapse">
                    <i class="fas fa-user"></i> Usuário
                </a>

                <ul id="submenu1" class="list-unstyled collapse">

                    <li>
                        <a href="#submenu2" data-toggle="collapse">
                            <i class="fas fa-user"></i>
                            Gerenciar
                        </a>

                        <ul id="submenu2" class="list-unstyled collapse">
                            @can('view-user')
                                <li>
                                    <a href="/users/view">
                                        <i class="fas fa-users"></i>
                                        Visualizar
                                    </a>
                                </li>
                            @endcan

                            @can('delete-user')
                                <li>
                                    <a href="/users/delete">
                                        <i class="fas fa-users"></i>
                                        Deletar
                                    </a>
                                </li>
                            @endcan

                            @can('edit-user')
                                <li>
                                    <a href="/users/edit">
                                        <i class="fas fa-users"></i>
                                        Editar
                                    </a>
                                </li>
                            @endcan

                            @can('create-user')
                                <li>
                                    <a href="/user/register">
                                        <i class="fas fa-users"></i>
                                        Inserir
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>

                </ul>

            </li>
        @endif

        <li>
            <a href="#submenu3" data-toggle="collapse">
                <i class="fas fa-user"></i>
                Níveis
            </a>

            <ul id="submenu3" class="list-unstyled collapse">
                @role('super-admin')
                    <li>
                        <a href="/dashboard">
                            <i class="fas fa-users"></i> 
                            Admin
                        </a>
                    </li>
                @endrole
                
                @role('gestor')
                    <li>
                        <a href="/dashboard">
                            <i class="fas fa-users"></i> 
                            Gestor
                        </a>
                    </li>
                @endrole

                @role('bolsista')
                    <li>
                        <a href="/dashboard">
                            <i class="fas fa-users"></i> 
                            Bolsista
                        </a>
                    </li>
                @endrole

                @role('orientador')
                    <li>
                        <a href="/dashboard">
                            <i class="fas fa-users"></i> 
                            Orientador
                        </a>
                    </li>
                @endrole

                @role('membro')
                    <li>
                        <a href="/dashboard">
                            <i class="fas fa-users"></i>
                            Membro
                        </a>
                    </li>
                @endrole
            </ul>
        </li>

        @if ($user->hasRole(['super-admin', 'orientador']))

            <li>
                <a href="#submenu4" data-toggle="collapse">
                    <i class="fas fa-user"></i>
                    Editais
                </a>

                <ul id="submenu4" class="list-unstyled collapse">
                    <li>
                        <a href="#submenu5" data-toggle="collapse">
                            <i class="fas fa-user"></i>
                            Gerenciar
                        </a>

                        <ul id="submenu5" class="list-unstyled collapse">
                            @can('edit-edict')
                                <li>
                                    <a href="/dashboard">
                                        <i class="fas fa-users"></i>
                                        Atualizar Edital
                                    </a>
                                </li>
                            @endcan

                            @can('delete-edict')
                                <li>
                                    <a href="/dashboard">
                                        <i class="fas fa-users"></i>
                                        Deletar Edital
                                    </a>
                                </li>
                            @endcan

                            @can('view-edict')
                                <li>
                                    <a href="/dashboard">
                                        <i class="fas fa-users"></i>
                                        Ver Edital
                                    </a>
                                </li>
                            @endcan

                            @can('create-edict')
                                <li>
                                    <a href="/edital/create">
                                        <i class="fas fa-users"></i>
                                        Inserir Edital
                                    </a>
                                </li>
                            @endcan

                        </ul>

                        <a href="#submenu6" data-toggle="collapse">
                            <i class="fas fa-user"></i>
                            Relatórios
                        </a>

                        <ul id="submenu6" class="list-unstyled collapse">
                            <li>
                                <a href="/dashboard">
                                    <i class="fas fa-users"></i>
                                    Frequência
                                </a>
                            </li>

                            <li>
                                <a href="/dashboard">
                                    <i class="fas fa-users"></i>
                                    Relatório de Pesquisa
                                </a>
                            </li>

                            <li>
                                <a href="/dashboard">
                                    <i class="fas fa-users"></i>
                                    Relatório Final
                                </a>
                            </li>

                        </ul>
                    </li>
                </ul>

            </li>

        @endif


        @if ($user->hasRole(['super-admin','gestor', 'membro']))
            <li>
                <a href="#submenu7" data-toggle="collapse">
                    <i class="fas fa-user"></i> Projetos
                </a>

                <ul id="submenu7" class="list-unstyled collapse">
                    <li>
                        <a href="/dashboard"><i class="fas fa-users"></i>
                            Voluntários
                        </a>
                    </li>

                    <li>
                        <a href="/dashboard">
                            <i class="fas fa-users"></i>
                            Avaliar
                        </a>
                    </li>
                    
                </ul>

            </li>
        @endif

    </ul>
</nav>