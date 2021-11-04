

<?php $__env->startSection('title', 'Crie Um Plano De Trabalho'); ?>

<?php $__env->startSection('content'); ?>

   <?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

   <div class="d-flex">

      <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <div class="form-create">

         <h1>Crie Um Plano De Trabalho</h1>

         <form action="<?php echo e(route('works_plans.store')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>

            <div id="form-area">
               <div class="form-content">
                  <div class="form-group">
                     <label for="title">Título</label>
                     <input type="text" name="title" class="form-control <?php echo e($errors->has('title') ? 'is-invalid' : ''); ?>"
                        id="title">

                     <div class="invalid-feedback">
                        <?php $__currentLoopData = $errors->get('title'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <?php echo e($error); ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </div>

                  </div>

                  <div class="form-group">

                     <label for="content">Descrição Completa</label>

                     <textarea class="form-control <?php echo e($errors->has('content') ? 'is-invalid' : ''); ?>" name="content"
                        id="content" rows="3"></textarea>

                     <div class="invalid-feedback">
                        <?php $__currentLoopData = $errors->get('content'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <?php echo e($error); ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </div>

                  </div>

                  <div class="form-group">

                     <label for="abstract">Descrição Resumida</label>

                     <textarea class="form-control <?php echo e($errors->has('abstract') ? 'is-invalid' : ''); ?>" name="abstract"
                        id="abstract" rows="2"></textarea>

                     <div class="invalid-feedback">
                        <?php $__currentLoopData = $errors->get('abstract'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <?php echo e($error); ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </div>

                  </div>

                  <div class="form-group">

                     <label for="references">Referências</label>

                     <input type="url" name="references"
                        class="form-control <?php echo e($errors->has('references') ? 'is-invalid' : ''); ?>" id="references">

                     <div class="invalid-feedback">
                        <?php $__currentLoopData = $errors->get('references'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <?php echo e($error); ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </div>

                  </div>

                  <div class="form-row">

                     <div class="form-group col-md-12">

                        <label for="bolsistas">Cadastre Bolsistas</label>

                        

                        <select class="form-control <?php echo e($errors->has('bolsistas') ? 'is-invalid' : ''); ?>"
                           onchange="setBolsistas(this)" id="bolsistas">

                           <option value="" id="option-checked">
                              Selecione
                           </option>

                           <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <?php if($user->hasRole('bolsista')): ?>
                                 <option label="<?php echo e($user->name); ?>" value="<?php echo e($user->id); ?>">
                              <?php endif; ?>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </select>

                        <div class="invalid-feedback">
                           <?php $__currentLoopData = $errors->get('bolsista_id'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <?php echo e($error); ?>

                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>

                     </div>
                  </div>

                  <div id="res-bolsistas">

                  </div>
               </div>

            </div>

            <button type="submit" class="btn btn-primary">Criar</button>
         </form>
      </div>

   </div>

<?php $__env->startSection('script'); ?>
   <script>

      function setBolsistas(response) {

         var bolsista_id = $('#bolsistas').val();

         var bolsista_name = $('#bolsistas').find('option:selected').attr('label');

         if(bolsista_name) {
            $('#res-bolsistas').append(`<p>${bolsista_name}</p>`);

            $('#res-bolsistas').append(`
                  <input 
                     type="hidden"  
                     name="bolsistas[]" 
                     value='{id: ${bolsista_id}, name: ${bolsista_name}}'
                  >
               `);

            $('#bolsistas').find('option:selected').remove();
            $('#option-checked').prop('selected', 'true');
         }

      }
   </script>
<?php $__env->stopSection(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Fabio Gabriel\Desktop\Unilab-Project\resources\views/work_plans/createWorkPlans.blade.php ENDPATH**/ ?>