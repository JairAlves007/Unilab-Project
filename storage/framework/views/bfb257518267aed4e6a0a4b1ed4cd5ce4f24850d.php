<nav class="sidebar">
   <ul class="list-unstyled">

      <?php if($user->can_access == 0): ?>

         <li class="menu-click">
            
            <a href="#submenu1" data-toggle="collapse" class="collapsed">

               <i class="fas fa-users"></i>

               Cadastre Sua Matrícula

               <div class="icon-rotate icon-space">
                  <i class="fas fa-angle-down"></i>
               </div>

            </a>
            
            <ul id="submenu1" class="list-unstyled collapse">

               <?php if($user->hasRole('bolsista')): ?>
                  <li>

                     <a href="<?php echo e(route('users.registration.bolsista')); ?>" class="li-submenu">
                        <i class="fas fa-users"></i>
                        Bolsista
                     </a>

                  </li>
               <?php endif; ?>

               <?php if($user->hasRole('orientador')): ?>
                  <li>

                     <a href="<?php echo e(route('users.registration.orientador')); ?>" class="li-submenu">
                        <i class="fas fa-users"></i>
                        Orientador
                     </a>
                     
                  </li>

               <?php endif; ?>

            </ul>

         </li>

      <?php else: ?>

         <li class="<?php echo e(Request::route()->getName() === 'dashboard' ? 'active' : ''); ?>">
            <a href="/dashboard">
               <i class="fa fa-folder-open" aria-hidden="true"></i>
               Dashboard
            </a>
         </li>

         <?php if($user->hasRole(['super-admin', 'gestor'])): ?>
            <li class="menu-click">

               <a href="#submenu2" data-toggle="collapse" class="collapsed">
                  <i class="fas fa-user"></i>

                  Usuário

                  <div class="icon-rotate icon-space">
                     <i class="fas fa-angle-down"></i>
                  </div>
               </a>

               <ul id="submenu2" class="list-unstyled collapse">

                  <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view-user')): ?>
                     <li class="<?php echo e(Request::route()->getName() === 'users.view' ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('users.view')); ?>" class="li-submenu">
                           <i class="fas fa-users"></i>
                           Ver Usuários
                        </a>
                     </li>
                  <?php endif; ?>

                  <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create-user')): ?>
                     <li class="<?php echo e(Request::route()->getName() === 'users.create' ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('users.create')); ?>" class="li-submenu">
                           <i class="fa fa-user-plus" aria-hidden="true"></i>
                           Inserir Usuários
                        </a>
                     </li>
                  <?php endif; ?>

                  <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit-user')): ?>
                     <li class="<?php echo e(Request::route()->getName() === 'users.edit' ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('users.edit')); ?>" class="li-submenu">
                           <i class="fas fa-user-edit"></i>
                           Editar Usuários
                        </a>
                     </li>
                  <?php endif; ?>

                  <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete-user')): ?>
                     <li class="<?php echo e(Request::route()->getName() === 'users.delete' ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('users.delete')); ?>" class="li-submenu">
                           <i class="fas fa-user-alt-slash"></i>
                           Deletar Usuários
                        </a>
                     </li>
                  <?php endif; ?>

               </ul>

            </li>
         <?php endif; ?>

         <?php if($user->hasRole(['super-admin', 'orientador'])): ?>

            <li class="menu-click">
               <a href="#submenu3" data-toggle="collapse" class="collapsed">
                  <i class="fas fa-file-invoice"></i>
                  Editais
                  <div class="icon-rotate icon-space">
                     <i class="fas fa-angle-down"></i>
                  </div>
               </a>

               <ul id="submenu3" class="list-unstyled collapse">
                  <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view-edict')): ?>
                     <li class="<?php echo e(Request::route()->getName() === 'edicts.showAll' ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('edicts.showAll')); ?>" class="li-submenu">
                           <i class="fas fa-copy"></i>
                           Ver Editais
                        </a>
                     </li>
                  <?php endif; ?>

                  <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create-edict')): ?>
                     <li class="<?php echo e(Request::route()->getName() === 'edicts.create' ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('edicts.create')); ?>" class="li-submenu">
                           <i class="fas fa-file-medical"></i>
                           Inserir Edital
                        </a>
                     </li>
                  <?php endif; ?>

                  <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit-edict')): ?>
                     <li class="<?php echo e(Request::route()->getName() === 'edicts.edit' ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('edicts.edit')); ?>" class="li-submenu">
                           <i class="fas fa-file-signature"></i>
                           Atualizar Edital
                        </a>
                     </li>
                  <?php endif; ?>

                  <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('attach-project')): ?>
                     <li class="<?php echo e(Request::route()->getName() === 'edicts.projects' ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('edicts.projects')); ?>" class="li-submenu">
                           <i class="fas fa-file-upload"></i>
                           Anexar Projetos
                        </a>
                     </li>
                  <?php endif; ?>

                  <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete-edict')): ?>
                     <li class="<?php echo e(Request::route()->getName() === 'edicts.delete' ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('edicts.delete')); ?>" class="li-submenu">
                           <i class="fas fa-file-excel"></i>
                           Deletar Edital
                        </a>
                     </li>
                  <?php endif; ?>
               </ul>

            </li>

         <?php endif; ?>

         <?php if($user->hasRole(['super-admin', 'membro'])): ?>
            <li class="menu-click">
               <a href="#submenu4" data-toggle="collapse" class="collapsed">
                  <i class="fas fa-user"></i>

                  Projetos

                  <div class="icon-rotate icon-space">
                     <i class="fas fa-angle-down"></i>
                  </div>
               </a>

               <ul id="submenu4" class="list-unstyled collapse">
                  <li>
                     <a href="<?php echo e(route('projects.showAll')); ?>"><i class="fas fa-users"></i>
                        Adicionar Plano De Trabalho
                     </a>
                  </li>

                  <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('rate-project')): ?>
                     <li>
                        <a href="<?php echo e(route('works_plans.approved')); ?>">
                           <i class="fas fa-users"></i>
                           Candidatos
                        </a>
                     </li>
                  <?php endif; ?>

               </ul>

            </li>
         <?php endif; ?>

      <?php endif; ?>


   </ul>
</nav>
<?php /**PATH C:\Users\Fabio Gabriel\Desktop\Unilab-Project\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>