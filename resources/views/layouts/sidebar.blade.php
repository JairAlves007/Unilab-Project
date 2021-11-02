<nav class="sidebar">
   <ul class="list-unstyled">

      @if ($user->can_access == 0)

         <li class="menu-click">

            <li>
               <a href="{{ route('users.form-registration') }}">
                  <i class="fas fa-users"></i>
                  Cadastre Sua Matrícula
               </a>
            </li>

         </li>

      @else

         <li class="{{ Request::route()->getName() === 'dashboard' ? 'active' : '' }}">
            <a href="/dashboard">
               <i class="fa fa-folder-open" aria-hidden="true"></i>
               Dashboard
            </a>
         </li>

         @if ($user->hasRole(['super-admin', 'gestor']))
            <li class="menu-click">

               <a href="#submenu1" data-toggle="collapse" class="collapsed">
                  <i class="fas fa-user"></i>

                  Usuário

                  <div class="icon-rotate icon-space">
                     <i class="fas fa-angle-down"></i>
                  </div>
               </a>

               <ul id="submenu1" class="list-unstyled collapse">

                  @can('view-user')
                     <li class="{{ Request::route()->getName() === 'users.view' ? 'active' : '' }}">
                        <a href="{{ route('users.view') }}" class="li-submenu">
                           <i class="fas fa-users"></i>
                           Ver Usuários
                        </a>
                     </li>
                  @endcan

                  @can('create-user')
                     <li class="{{ Request::route()->getName() === 'users.create' ? 'active' : '' }}">
                        <a href="{{ route('users.create') }}" class="li-submenu">
                           <i class="fa fa-user-plus" aria-hidden="true"></i>
                           Inserir Usuários
                        </a>
                     </li>
                  @endcan

                  @can('edit-user')
                     <li class="{{ Request::route()->getName() === 'users.edit' ? 'active' : '' }}">
                        <a href="{{ route('users.edit') }}" class="li-submenu">
                           <i class="fas fa-user-edit"></i>
                           Editar Usuários
                        </a>
                     </li>
                  @endcan

                  @can('delete-user')
                     <li class="{{ Request::route()->getName() === 'users.delete' ? 'active' : '' }}">
                        <a href="{{ route('users.delete') }}" class="li-submenu">
                           <i class="fas fa-user-alt-slash"></i>
                           Deletar Usuários
                        </a>
                     </li>
                  @endcan

               </ul>

            </li>
         @endif

         @if ($user->hasRole(['super-admin', 'orientador']))

            <li class="menu-click">
               <a href="#submenu2" data-toggle="collapse" class="collapsed">
                  <i class="fas fa-file-invoice"></i>
                  Editais
                  <div class="icon-rotate icon-space">
                     <i class="fas fa-angle-down"></i>
                  </div>
               </a>

               <ul id="submenu2" class="list-unstyled collapse">
                  @can('view-edict')
                     <li class="{{ Request::route()->getName() === 'edicts.showAll' ? 'active' : '' }}">
                        <a href="{{ route('edicts.showAll') }}" class="li-submenu">
                           <i class="fas fa-copy"></i>
                           Ver Editais
                        </a>
                     </li>
                  @endcan

                  @can('create-edict')
                     <li class="{{ Request::route()->getName() === 'edicts.create' ? 'active' : '' }}">
                        <a href="{{ route('edicts.create') }}" class="li-submenu">
                           <i class="fas fa-file-medical"></i>
                           Inserir Edital
                        </a>
                     </li>
                  @endcan

                  @can('edit-edict')
                     <li class="{{ Request::route()->getName() === 'edicts.edit' ? 'active' : '' }}">
                        <a href="{{ route('edicts.edit') }}" class="li-submenu">
                           <i class="fas fa-file-signature"></i>
                           Atualizar Edital
                        </a>
                     </li>
                  @endcan

                  @can('attach-project')
                     <li class="{{ Request::route()->getName() === 'edicts.projects' ? 'active' : '' }}">
                        <a href="{{ route('edicts.projects') }}" class="li-submenu">
                           <i class="fas fa-file-upload"></i>
                           Anexar Projetos
                        </a>
                     </li>
                  @endcan

                  @can('delete-edict')
                     <li class="{{ Request::route()->getName() === 'edicts.delete' ? 'active' : '' }}">
                        <a href="{{ route('edicts.delete') }}" class="li-submenu">
                           <i class="fas fa-file-excel"></i>
                           Deletar Edital
                        </a>
                     </li>
                  @endcan
               </ul>

            </li>

         @endif

         @if ($user->hasRole(['super-admin', 'membro']))
            <li class="menu-click">
               <a href="#submenu7" data-toggle="collapse" class="collapsed">
                  <i class="fas fa-user"></i>

                  Projetos

                  <div class="icon-rotate icon-space">
                     <i class="fas fa-angle-down"></i>
                  </div>
               </a>

               <ul id="submenu7" class="list-unstyled collapse">
                  <li>
                     <a href="{{ route('projects.showAll') }}"><i class="fas fa-users"></i>
                        Adicionar Plano De Trabalho
                     </a>
                  </li>

                  @can('rate-project')
                     <li>
                        <a href="{{ route('works_plans.approved') }}">
                           <i class="fas fa-users"></i>
                           Candidatos
                        </a>
                     </li>
                  @endcan

               </ul>

            </li>
         @endif

      @endif


   </ul>
</nav>
