

<?php $__env->startSection('title', 'Mostrar Usuário'); ?>

<?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('content'); ?>

   <div class="d-flex">
      <?php if(auth()->check() && auth()->user()->hasRole('gestor')): ?>
         <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php endif; ?>

      <div class="content p-1">
         <div class="list-group-item">
            <div class="d-flex">
               <div class="mr-auto p-2">
                  <h2 class="display-4 titulo">Usuário <?php echo e($user_checking->name); ?></h2>
               </div>

               <?php if(auth()->check() && auth()->user()->hasRole('gestor')): ?>
                  <div class="p-2">
                     <span class="d-none d-md-block">
                        <a href="/users/view" class="btn btn-outline-info btn-sm">Ver Usuários</a>

                        <?php if($user_checking->id !== $user->id): ?>
                           <a href="<?php echo e(route('user.editAnUser', $user_checking)); ?>" class="btn btn-outline-warning btn-sm">Editar</a>
                        <?php else: ?>
                           <a href="<?php echo e(route('profile.edit', $user)); ?>" class="btn btn-outline-warning btn-sm">Editar</a>
                        <?php endif; ?>

                        <?php if($user_checking->id !== $user->id): ?>
                           <a href="apagar.html" class="btn btn-outline-danger btn-sm" data-toggle="modal"
                              data-target="#apagarRegistro">Apagar</a>
                        <?php endif; ?>
                     </span>

                     <div class="dropdown d-block d-md-none">
                        <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           Ações
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">
                           <a class="dropdown-item" href="/users/view">Ver Usuários</a>

                           <?php if($user_checking->id !== $user->id): ?>
                              <a class="dropdown-item" href="<?php echo e(route('user.editAnUser', $user_checking)); ?>">Editar</a>
                           <?php else: ?>
                              <a class="dropdown-item" href="<?php echo e(route('profile.edit', $user)); ?>">Editar</a>
                           <?php endif; ?>

                           <?php if($user_checking->id !== $user->id): ?>
                              <a class="dropdown-item" href="apagar.html" data-toggle="modal"
                                 data-target="#apagarRegistro">Apagar</a>
                           <?php endif; ?>

                        </div>
                     </div>
                  </div>
               <?php endif; ?>
            </div>

            <hr>
            <hr>

            <dl class="row">
               <dt class="col-sm-3">ID</dt>
               <dd class="col-sm-9"><?php echo e($user_checking->id); ?></dd>

               <dt class="col-sm-3">Nome</dt>
               <dd class="col-sm-9"><?php echo e($user_checking->name); ?></dd>

               <dt class="col-sm-3">Email</dt>
               <dd class="col-sm-9"><?php echo e($user_checking->email); ?></dd>

               <dt class="col-sm-3">Níveis No Sistema</dt>
               <dd class="col-sm-9" style="text-transform: capitalize;">
                  <?php for($i = 0; $i < count($user_roles); $i++): ?>
                     <?php if($i < count($user_roles) - 1): ?>
                        <?php echo e($user_roles[$i]->name); ?>,
                     <?php else: ?>
                        <?php echo e($user_roles[$i]->name); ?>

                     <?php endif; ?>
                  <?php endfor; ?>
               </dd>

               <dt class="col-sm-3 text-truncate">Data do Cadastro</dt>
               <dd class="col-sm-9"><?php echo e($user_checking->created_at); ?></dd>
            </dl>
         </div>
      </div>
   </div>

   <?php if(auth()->check() && auth()->user()->hasRole('gestor')): ?>
      <form id="form-apagar" action="<?php echo e(route('users.destroy', $user_checking)); ?>" method="POST">
         <?php echo csrf_field(); ?>
         <?php echo method_field('DELETE'); ?>
      </form>

      <div class="modal fade" id="apagarRegistro" tabindex="-1" role="dialog" aria-labelledby="apagarRegistroLabel"
         aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
                  <div class="modal-header bg-danger text-white">
                     <h5 class="modal-title" id="exampleModalLabel">EXCLUIR ITEM</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
                  <div class="modal-body">
                     Tem certeza de que deseja excluir o item selecionado?
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
                     <button href="submit" form="form-apagar" class="btn btn-danger">Apagar</button>
                  </div>
            </div>
         </div>
      </div>
   <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Fabio Gabriel\Desktop\Unilab-Project\resources\views/users/showUser.blade.php ENDPATH**/ ?>