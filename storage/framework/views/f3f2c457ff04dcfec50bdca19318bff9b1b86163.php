<?php $__env->startSection('title', 'Veja Todos Os Editais'); ?>

<?php $__env->startSection('content'); ?>

   <?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

   <div class="d-flex">

      <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <div class="content p-1">
         <div class="list-group-item">
            <div class="table-responsive">
               <table class="table table-striped table-hover table-bordered">
                  <thead>
                     <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th class="d-none d-sm-table-cell">Código</th>
                        <th class="d-none d-lg-table-cell">Ano do Edital</th>
                        <th class="d-none d-lg-table-cell">Quantidade de Projetos</th>
                        <th class="text-center">Ações</th>
                     </tr>
                  </thead>

                  <tbody>
                     <?php $__currentLoopData = $edicts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $edict): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <tr>
                           <th><?php echo e($edict->id); ?></th>
                           <td><?php echo e($edict->title); ?></td>
                           <td class="d-none d-sm-table-cell"><?php echo e($edict->code); ?></td>
                           <td class="d-none d-lg-table-cell"><?php echo e($edict->edict_year); ?></td>
                           <td class="d-none d-lg-table-cell"><?php echo e(count($edict->projects)); ?></td>
                           <td class="text-center">
                              <span class="d-none d-md-block">
                                 <?php switch(Request::route()->getName()):
                                    case ('edicts.showAll'): ?>
                                       <a href="<?php echo e(route('edicts.showDashboard', $edict)); ?>"
                                          class="btn btn-outline-success btn-sm">
                                          Visualizar
                                       </a>
                                    <?php break; ?>

                                    <?php case ('edicts.projects'): ?>
                                       <a href="<?php echo e(route('projects.form-attach-project', $edict)); ?>"
                                          class="btn btn-outline-primary btn-sm">
                                          Anexar Projetos
                                       </a>
                                    <?php break; ?>

                                    <?php case ('edicts.edit'): ?>
                                       <a href="<?php echo e(route('edicts.edit', $edict)); ?>"
                                       class="btn btn-outline-warning btn-sm">
                                          Editar
                                       </a>
                                    <?php break; ?>

                                    <?php case ('edicts.delete'): ?>
                                       <form action="<?php echo e(route('edicts.destroy', $edict)); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <a href="<?php echo e(route('edicts.destroy', $edict)); ?>"
                                            class="btn btn-outline-danger btn-sm"
                                            onclick="event.preventDefault();
                                                    this.closest('form').submit();"
                                            >
                                            Apagar
                                        </a>
                                    </form>
                                    <?php break; ?>


                                 <?php endswitch; ?>

                              </span>
                              <div class="dropdown d-block d-md-none">
                                 <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Ações
                                 </button>
                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">

                                    <a href="<?php echo e(route('edicts.showDashboard', $edict)); ?>" class=" dropdown-item">
                                       Visualizar
                                    </a>

                                 </div>
                              </div>
                           </td>
                        </tr>

                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
               </table>

            </div>
         </div>

      </div>

   </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Linguas_05\Documents\Unilab\Unilab-Project\resources\views/edicts/showEdicts.blade.php ENDPATH**/ ?>