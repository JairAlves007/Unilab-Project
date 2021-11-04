

<?php $__env->startSection('title', 'Editar Usuário'); ?>

<?php $__env->startSection('content'); ?>
   <?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

   <div class="d-flex">
      <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <div class="content p-1">

         <div class="list-group-item">
            <div class="d-flex">
               <div class="mr-auto p-2">
                  <h2 class="display-4 titulo">Editar Usuário <?php echo e($user_checking->name); ?></h2>
               </div>

               <?php if(auth()->check() && auth()->user()->hasRole('super-admin')): ?>
                  <div class="p-2">
                     <span class="d-none d-md-block">
                        <a href="/users/view" class="btn btn-outline-info btn-sm">Ver Usuários</a>

                        <?php if($user_checking->id === $user->id): ?>
                           <a href="/profile/show/<?php echo e($user_checking->id); ?>"
                              class="btn btn-outline-primary btn-sm">Visualizar</a>
                        <?php else: ?>
                           <a href="/user/show/<?php echo e($user_checking->id); ?>"
                              class="btn btn-outline-primary btn-sm">Visualizar</a>
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

                           <?php if($user_checking->id === $user->id): ?>
                              <a class="dropdown-item" href="/profile/show/<?php echo e($user_checking->id); ?>">Visualizar</a>
                           <?php else: ?>
                              <a class="dropdown-item" href="/user/show/<?php echo e($user_checking->id); ?>">Visualizar</a>
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

            <form method="POST" 
               <?php if($user_checking->id == $user->id): ?>
                  action="<?php echo e(route('profile.update', $user_checking)); ?>"
               <?php else: ?>
                  action="<?php echo e(route('users.update', $user_checking)); ?>"
               <?php endif; ?>
            >

               <?php echo csrf_field(); ?>
               <?php echo method_field('PUT'); ?>

               <div class="form-row">

                  <div class="form-group col-md-6">

                     <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.label','data' => ['for' => 'name','value' => ''.e(__('Nome')).'']]); ?>
<?php $component->withName('jet-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['for' => 'name','value' => ''.e(__('Nome')).'']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

                     <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.input','data' => ['id' => 'name','value' => ''.e($user_checking->name).'','class' => 'form-control '.e(($errors->has('name')) ? 'is-invalid' : '').'','type' => 'text','name' => 'name','autofocus' => true,'autocomplete' => 'name']]); ?>
<?php $component->withName('jet-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => 'name','value' => ''.e($user_checking->name).'','class' => 'form-control '.e(($errors->has('name')) ? 'is-invalid' : '').'','type' => 'text','name' => 'name','autofocus' => true,'autocomplete' => 'name']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

                     <div class="invalid-feedback">
                        <?php $__currentLoopData = $errors->get('name'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <?php echo e($error); ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </div>

                  </div>

                  <div class="form-group col-md-6">

                     <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.label','data' => ['for' => 'email','value' => ''.e(__('Email')).'']]); ?>
<?php $component->withName('jet-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['for' => 'email','value' => ''.e(__('Email')).'']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

                     <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.input','data' => ['id' => 'email','value' => ''.e($user_checking->email).'','class' => 'form-control '.e(($errors->has('email')) ? 'is-invalid' : '').'','type' => 'email','name' => 'email']]); ?>
<?php $component->withName('jet-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => 'email','value' => ''.e($user_checking->email).'','class' => 'form-control '.e(($errors->has('email')) ? 'is-invalid' : '').'','type' => 'email','name' => 'email']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

                     <div class="invalid-feedback">
                        <?php $__currentLoopData = $errors->get('email'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <?php echo e($error); ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </div>

                  </div>

               </div>

               <div class="form-row">
                  <div class="form-group col-md-6">

                     <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.label','data' => ['for' => 'password','value' => ''.e(__('Senha')).'']]); ?>
<?php $component->withName('jet-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['for' => 'password','value' => ''.e(__('Senha')).'']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

                     <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.input','data' => ['id' => 'password','class' => 'form-control '.e(($errors->has('password')) ? 'is-invalid' : '').'','type' => 'password','name' => 'password','autocomplete' => 'new-password']]); ?>
<?php $component->withName('jet-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => 'password','class' => 'form-control '.e(($errors->has('password')) ? 'is-invalid' : '').'','type' => 'password','name' => 'password','autocomplete' => 'new-password']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

                     <div class="invalid-feedback">
                        <?php $__currentLoopData = $errors->get('password'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <?php echo e($error); ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </div>

                  </div>

                  <div class="form-group col-md-6">
                     <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.label','data' => ['for' => 'password_confirmation','value' => ''.e(__('Confirmar Senha')).'']]); ?>
<?php $component->withName('jet-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['for' => 'password_confirmation','value' => ''.e(__('Confirmar Senha')).'']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

                     <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.input','data' => ['id' => 'password_confirmation','class' => 'form-control '.e(($errors->has('password_confirmation')) ? 'is-invalid' : '').'','type' => 'password','name' => 'password_confirmation','autocomplete' => 'new-password']]); ?>
<?php $component->withName('jet-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => 'password_confirmation','class' => 'form-control '.e(($errors->has('password_confirmation')) ? 'is-invalid' : '').'','type' => 'password','name' => 'password_confirmation','autocomplete' => 'new-password']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

                     <div class="invalid-feedback">
                        <?php $__currentLoopData = $errors->get('password_confirmation'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <?php echo e($error); ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </div>

                  </div>
               </div>

               <?php if($user->hasRole('super-admin') && $user_checking->id != $user->id): ?>

                  <p>
                     <span class="text-danger">*</span> Campo obrigatório
                  </p>

                  <?php if($errors->has('niveis')): ?>
                     <p class="text-danger">Marque Um Nível De Acesso</p>
                  <?php endif; ?>

                  <div class="form-row">

                     <div class="form-group col-md-12">

                        <div class="form-check">
                           <input class="form-check-input <?php echo e(($errors->has('niveis')) ? 'is-invalid' : ''); ?>" type="checkbox" name="niveis[]" value="bolsista"
                              id="checkBolsista" 
                              
                              <?php if($user_checking->hasRole('gestor')): ?>
                                 checked 
                              <?php endif; ?>
                           >
                           
                           <label class="form-check-label" for="checkBolsista">
                              Gestor
                           </label>
                        </div>

                        <div class="form-check">
                           <input class="form-check-input <?php echo e(($errors->has('niveis')) ? 'is-invalid' : ''); ?>" type="checkbox" name="niveis[]" value="bolsista"
                              id="checkBolsista" 
                              
                              <?php if($user_checking->hasRole('bolsista')): ?>
                                 checked 
                              <?php endif; ?>
                           >

                           <label class="form-check-label" for="checkBolsista">
                              Bolsista/Voluntário
                           </label>
                        </div>

                        <div class="form-check">
                           <input class="form-check-input <?php echo e(($errors->has('niveis')) ? 'is-invalid' : ''); ?>" type="checkbox" name="niveis[]" value="orientador"
                              id="checkOrientador" 
                              
                              <?php if($user_checking->hasRole('orientador')): ?> 
                                 checked 
                              <?php endif; ?>
                           >

                           <label class="form-check-label" for="checkOrientador">
                              Orientador/Coordenador
                           </label>
                        </div>

                        <div class="form-check">
                           <input class="form-check-input <?php echo e(($errors->has('niveis')) ? 'is-invalid' : ''); ?>" type="checkbox" name="niveis[]" value="membro" id="checkMembro"
                              <?php if($user_checking->hasRole('membro')): ?>
                                 checked 
                              <?php endif; ?>
                           >

                           <label class="form-check-label" for="checkMembro">
                              Membro da Comissão(CAPP)
                           </label>
                        </div>

                     </div>

                  </div>
               <?php endif; ?>

               <button type="submit" class="btn btn-primary">Editar</button>
            </form>
         </div>

      </div>
   </div>

   <?php if(auth()->check() && auth()->user()->hasRole('super-admin')): ?>
      <form id="form-apagar" action="/user/delete/<?php echo e($user_checking->id); ?>" method="POST">
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
                  <button type="submit" form="form-apagar" class="btn btn-danger">Apagar</button>
               </div>
            </div>
         </div>
      </div>
   <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Fabio Gabriel\Desktop\Unilab-Project\resources\views/users/userEdit.blade.php ENDPATH**/ ?>