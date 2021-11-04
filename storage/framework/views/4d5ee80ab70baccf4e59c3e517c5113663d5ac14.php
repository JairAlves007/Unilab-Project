

<?php $__env->startSection('title', 'Usuários'); ?>

<?php $__env->startSection('content'); ?>

   <?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

   <div class="d-flex">

      <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <div class="content p-1">
         <div class="list-group-item">
            <div class="d-flex">
               <div class="mr-auto p-2">
                  <h2 class="display-4 titulo">Usuários</h2>
               </div>
            </div>

            <?php echo $__env->make('hintMessages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="table-responsive">
               <table class="table table-striped table-hover table-bordered">
                  <thead>
                     <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th class="d-none d-sm-table-cell">E-mail</th>
                        <th class="d-none d-lg-table-cell">Data do Cadastro</th>
                        <th class="text-center">Ações</th>
                     </tr>
                  </thead>

                  <tbody>
                     <?php $__currentLoopData = $all_users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user_checking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                           <th><?php echo e($user_checking->id); ?></th>
                           <td><?php echo e($user_checking->name); ?></td>
                           <td class="d-none d-sm-table-cell"><?php echo e($user_checking->email); ?></td>
                           <td class="d-none d-lg-table-cell"><?php echo e($user_checking->created_at); ?></td>
                           <td class="text-center">
                              <span class="d-none d-md-block">
                                 <?php if(Route::currentRouteName() == 'users.view'): ?>
                                    <a href="<?php echo e(route('users.showUser', $user_checking)); ?>"
                                       class="btn btn-outline-primary btn-sm">Visualizar</a>

                                 <?php elseif(Route::currentRouteName() == 'users.edit'): ?>

                                    <?php if($user_checking->id !== $user->id): ?>
                                       <a href="<?php echo e(route('users.editAnUser', $user_checking)); ?>"
                                          class="btn btn-outline-warning btn-sm">Editar</a>
                                    <?php else: ?>
                                       <a href="<?php echo e(route('profile.edit', $user)); ?>"
                                          class="btn btn-outline-warning btn-sm">Editar</a>
                                    <?php endif; ?>

                                 <?php elseif(Route::currentRouteName() == 'users.delete'): ?>

                                    <a href="<?php echo e(route('users.destroy', $user_checking)); ?>"
                                       class="btn btn-outline-danger btn-sm"
                                       onclick="return confirm('Você Realmente Deseja Excluir Este Usuário?');">

                                       Apagar

                                    </a>

                                 <?php endif; ?>

                              </span>
                              <div class="dropdown d-block d-md-none">
                                 <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Ações
                                 </button>
                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">
                                    <?php if(Route::currentRouteName() == 'users.view'): ?>
                                       <a href="<?php echo e(route('users.showUser', $user_checking)); ?>"
                                          class=" dropdown-item">Visualizar</a>

                                    <?php elseif(Route::currentRouteName() == 'users.edit'): ?>

                                       <?php if($user_checking->id !== $user->id): ?>
                                          <a href="<?php echo e(route('users.editAnUser', $user_checking)); ?>"
                                             class="dropdown-item">Editar</a>
                                       <?php else: ?>
                                          <a href="<?php echo e(route('profile.edit', $user)); ?>" class="dropdown-item">Editar</a>
                                       <?php endif; ?>
                                    <?php elseif(Route::currentRouteName() == 'users.delete'): ?>
                                       <a href="<?php echo e(route('users.destroy', $user_checking)); ?>" class="dropdown-item">Apagar</a>
                                    <?php endif; ?>
                                 </div>
                              </div>
                           </td>
                        </tr>

                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
               </table>

            </div>

            <?php echo $all_users->links(); ?>

         </div>
      </div>
   </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Fabio Gabriel\Desktop\Unilab-Project\resources\views/users/showUsers.blade.php ENDPATH**/ ?>