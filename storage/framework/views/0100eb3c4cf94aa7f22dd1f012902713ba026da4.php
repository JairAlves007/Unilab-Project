<div class="d-flex">

   <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

   <div id="dashboard-card" class="p-1">
      <div class="list-group-item">
         <div class="d-flex">
            <div class="mr-auto p-2">
                  <h2 class="display-4 titulo">Dashboard</h2>
            </div>
         </div>

         <div class="row mb-3">
            <div class="col-lg-3 col-sm-6">
                  <div class="card bg-success text-white">
                     <div class="card-body">
                        <i class="fas fa-users fa-3x"></i>
                        <h6 class="card-title">Usuários</h6>
                        <h2 class="lead">
                              <?php echo e($count_users); ?>

                        </h2>
                     </div>
                  </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                  <div class="card bg-danger text-white">
                     <div class="card-body">
                        <i class="fas fa-file fa-3x"></i>
                        <h6 class="card-title">Projetos</h6>
                        <h2 class="lead">0</h2>
                     </div>
                  </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                  <div class="card bg-warning text-white">
                     <div class="card-body">
                        <i class="fas fa-eye fa-3x"></i>
                        <h6 class="card-title">Relatórios</h6>
                        <h2 class="lead">0</h2>
                     </div>
                  </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                  <div class="card bg-info text-white">
                     <div class="card-body">
                        <i class="fas fa-comments fa-3x"></i>
                        <h6 class="card-title">Avaliações</h6>
                        <h2 class="lead">0</h2>
                     </div>
                  </div>
            </div>
         </div>

      </div>
   </div>

</div>
<?php /**PATH C:\Users\Linguas_05\Documents\Unilab\Unilab-Project\resources\views/layouts/menuGestor.blade.php ENDPATH**/ ?>