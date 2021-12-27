<nav class="sidebar toggled">
  <ul class="list-unstyled">

    <li class="{{ Request::route()->getName() === 'dashboard' ? 'active' : '' }}">
      <a href="/dashboard">
        <i class="fa fa-folder-open" aria-hidden="true"></i>
        Dashboard
      </a>
    </li>

    @if ($user->can_access == 0)

    <li class="menu-click">

      <a href="#submenu1" data-toggle="collapse" class="collapsed li-submenu">

        <i class="fas fa-users"></i>

        Cadastre Sua Matrícula

        <div class="icon-rotate icon-space">
          <i class="fas fa-angle-down"></i>
        </div>

      </a>

      <ul id="submenu1" class="list-unstyled collapse">

        @if ($user->hasRole('bolsista'))
        <li>

          <a href="{{ route('users.registration.bolsista') }}" class="li-submenu">
            <i class="fas fa-users"></i>
            Bolsista
          </a>

        </li>

        @endif

        @if ($user->hasRole('orientador'))
        <li>

          <a href="{{ route('users.registration.orientador') }}" class="li-submenu">
            <i class="fas fa-users"></i>
            Orientador
          </a>

        </li>

        @endif

      </ul>

    </li>

    @else

    @if ($user->hasRole(['super-admin', 'gestor']))
      <li class="menu-click">
        @can('view-user')
        <li class="{{ Request::route()->getName() === 'users.view' ? 'active' : '' }}">
          <a href="{{ route('users.view') }}" class="li-submenu">
            <i class="fas fa-users"></i>
            Ver Usuários
          </a>
        </li>
        @endcan
      </li>    
    @endif

    @if ($user->hasRole(['super-admin', 'orientador', 'membro', 'bolsista']))
      <li class="menu-click">
        @can('view-edict')
        <li class="{{ Request::route()->getName() === 'edicts.showAll' ? 'active' : '' }}">
          <a href="{{ route('edicts.showAll') }}" class="li-submenu">
            <i class="fas fa-copy"></i>
            Ver Editais
          </a>
        </li>
        @endcan
    </li>

    @endif

    @if ($user->hasRole(['super-admin', 'orientador', 'bolsista']))
    <li class="menu-click">
      <a href="#submenu4" data-toggle="collapse" class="collapsed">
        <i class="fas fa-project-diagram"></i>

        Projetos

        <div class="icon-rotate icon-space">
          <i class="fas fa-angle-down"></i>
        </div>
      </a>

      <ul id="submenu4" class="list-unstyled collapse">
        @can('create-work_plans')
        <li>
          <a href="{{ route('projects.showAll') }}" class="li-submenu">
            <i class="fas fa-tasks"></i>
            Adicionar Plano De Trabalho
          </a>
        </li>
        @endcan

        @can('view-candidates')
        <li>
          <a href="{{ route('projects.showCandidates') }}" class="li-submenu">
            <i class="fas fa-user-friends"></i>
            Candidatos
          </a>
        </li>
        @endcan

        @can('view-work_plans-approved')
        <li>
          <a href="{{ route('projects.participating') }}" class="li-submenu">
            <i class="fas fa-check"></i>
            Planos Aprovados
          </a>
        </li>
        @endcan

        @can('view-work_plans-approved')
        <li>
          <a href="{{ route('work_plans.createTimeline') }}" class="li-submenu">
            <i class="fas fa-calendar-plus"></i>
            Criar Cronograma de Atividades
          </a>
        </li>
        @endcan
        
        @if($user->hasrole(['bolsista']))
        <li>
          @can('view-work_plans-approved')
          <a href="{{ route('projects.frequency') }}" class="li-submenu">
            <i class="fas fa-edit"></i>
            Ver Frequência
          </a>

          @endcan
        </li>
        @endif


      </ul>

    </li>
    @endif

    @endif


  </ul>
</nav>
