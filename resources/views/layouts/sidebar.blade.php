<nav class="sidebar">
   <ul class="list-unstyled">

      <li>
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
                  <li>
                     <a href="{{ route('users.view') }}">
                        <i class="fas fa-users"></i>
                        Visualizar Usuários
                     </a>
                  </li>
               @endcan

               @can('create-user')
                   <li>
                      <a href="{{ route('users.create') }}">
                         <i class="fa fa-user-plus" aria-hidden="true"></i>
                         Inserir Usuários
                      </a>
                   </li>
                @endcan

               @can('edit-user')
                  <li>
                     <a href="{{ route('users.edit') }}">
                        <i class="fas fa-user-edit"></i>
                        Editar Usuários
                     </a>
                  </li>
               @endcan

               @can('delete-user')
                  <li>
                     <a href="{{ route('users.delete') }}">
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
               @can('edit-edict')
                  <li>
                     <a href="{{ route('edicts.edit') }}">
                        <i class="fas fa-file-signature"></i>
                        Atualizar Edital
                     </a>
                  </li>
               @endcan

               @can('delete-edict')
                  <li>
                     <a href="{{ route('edicts.delete') }}">
                        <i class="fas fa-file-excel"></i>
                        Deletar Edital
                     </a>
                  </li>
               @endcan

               @can('view-edict')
                  <li>
                     <a href="{{ route('edicts.showAll') }}">
                        <i class="fas fa-copy"></i>
                        Ver Editais
                     </a>
                  </li>
               @endcan

               @can('create-edict')
                  <li>
                     <a href="{{ route('edicts.create') }}">
                        <i class="fas fa-file-medical"></i>
                        Inserir Edital
                     </a>
                  </li>
               @endcan

               @can('attach-project')
                  <li>
                     <a href="{{ route('edicts.projects') }}">
                        <i class="fas fa-file-import"></i>
                        Anexar Projetos
                     </a>
                  </li>
               @endcan

            </ul>

         </li>

         <li class="menu-click">
            <a href="#submenu3" data-toggle="collapse" class="collapsed">
               <i class="fas fa-user"></i>

               Relatórios

               <div class="icon-rotate icon-space">
                  <i class="fas fa-angle-down"></i>
               </div>
            </a>

            <ul id="submenu3" class="list-unstyled collapse">
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
                  <a href="/dashboard"><i class="fas fa-users"></i>
                     Voluntários
                  </a>
               </li>

               @can('rate-project')
                  <li>
                     <a href="/dashboard">
                        <i class="fas fa-users"></i>
                        Avaliar
                     </a>
                  </li>
               @endcan

            </ul>

         </li>
      @endif

   </ul>
</nav>