<nav class="sidebar">
   <ul class="list-unstyled">

      <li>
         <a href="/dashboard">
            <i class="fas fa-tachometer-alt"></i>
            Dashboard
         </a>
      </li>

      <?php if($user->hasRole(['super-admin', 'gestor'])): ?>
         <li class="menu-click">

            <a href="#submenu1" data-toggle="collapse" class="collapsed">
               <i class="fas fa-user"></i>
               
               Usuário

               <div class="icon-rotate icon-space">
                  <i class="fas fa-angle-down"></i>
               </div>
            </a>
            
            <ul id="submenu1" class="list-unstyled collapse">
               <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view-user')): ?>
                  <li>
                     <a href="/users/view">
                        <i class="fas fa-users"></i>
                        Visualizar
                     </a>
                  </li>
               <?php endif; ?>

               <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete-user')): ?>
                  <li>
                     <a href="/users/delete">
                        <i class="fas fa-users"></i>
                        Deletar
                     </a>
                  </li>
               <?php endif; ?>

               <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit-user')): ?>
                  <li>
                     <a href="/users/edit">
                        <i class="fas fa-users"></i>
                        Editar
                     </a>
                  </li>
               <?php endif; ?>

               <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create-user')): ?>
                  <li>
                     <a href="/user/register">
                        <i class="fas fa-users"></i>
                        Inserir
                     </a>
                  </li>
               <?php endif; ?>
            </ul>

         </li>
      <?php endif; ?>

      <?php if($user->hasRole(['super-admin', 'orientador'])): ?>

         <li class="menu-click">
            <a href="#submenu2" data-toggle="collapse" class="collapsed">
               <i class="fas fa-user"></i>
               Editais
               <div class="icon-rotate icon-space">
                  <i class="fas fa-angle-down"></i>
               </div>
            </a>

            <ul id="submenu2" class="list-unstyled collapse">
               <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit-edict')): ?>
                  <li>
                     <a href="<?php echo e(route('edicts.edit')); ?>">
                        <i class="fas fa-users"></i>
                        Atualizar Edital
                     </a>
                  </li>
               <?php endif; ?>

               <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete-edict')): ?>
                  <li>
                     <a href="<?php echo e(route('edicts.delete')); ?>">
                        <i class="fas fa-users"></i>
                        Deletar Edital
                     </a>
                  </li>
               <?php endif; ?>

               <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view-edict')): ?>
                  <li>
                     <a href="<?php echo e(route('edicts.showAll')); ?>">
                        <i class="fas fa-users"></i>
                        Ver Editais
                     </a>
                  </li>
               <?php endif; ?>

               <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create-edict')): ?>
                  <li>
                     <a href="<?php echo e(route('edicts.create')); ?>">
                        <i class="fas fa-users"></i>
                        Inserir Edital
                     </a>
                  </li>
               <?php endif; ?>

               <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('attach-project')): ?>
                  <li>
                     <a href="<?php echo e(route('edicts.projects')); ?>">
                        <i class="fas fa-users"></i>
                        Anexar Projetos
                     </a>
                  </li>
               <?php endif; ?>

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

      <?php endif; ?>


      <?php if($user->hasRole(['super-admin', 'membro'])): ?>
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

               <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('rate-project')): ?>
                  <li>
                     <a href="/dashboard">
                        <i class="fas fa-users"></i>
                        Avaliar
                     </a>
                  </li>
               <?php endif; ?>

            </ul>

         </li>
      <?php endif; ?>

   </ul>
</nav>
<?php /**PATH C:\Users\Linguas_05\Documents\Unilab\Unilab-Project\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>