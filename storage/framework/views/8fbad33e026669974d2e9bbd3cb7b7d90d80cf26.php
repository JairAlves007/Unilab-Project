

<?php $__env->startSection('title', 'Veja Mais Sobre o Edital'); ?>

<?php $__env->startSection('content'); ?>

    <?php if(Request::route()->getName() === 'edicts.showHome'): ?>

        <?php echo $__env->make('layouts.navbarWelcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php elseif(Request::route()->getName() === 'edicts.showDashboard'): ?>

        <?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php endif; ?>

    <?php if(Request::route()->getName() === 'edicts.showDashboard'): ?>
        <div class="d-flex">

            <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="content p-1" id="content-p-1">

    <?php endif; ?>

    <div id="edicts-container">
        <div class="edicts-content">
            <h2><?php echo e($edict->title); ?></h2>
            <p><?php echo e($edict->titulations->titulation); ?></p>
            <p><?php echo e($edict->categories->name); ?></p>
            <p> <?php echo e(date('d-m-Y', strtotime($edict->submission_start))); ?> até
                <?php echo e(date('d-m-Y', strtotime($edict->submission_finish))); ?></p>
            <a href="/events/join/" class="btn btn-primary" id="event-submit" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                Baixar PDF
            </a>
        </div>

        <div class="edicts-description">
            <h4>Descrição</h4>
            <p><?php echo e($edict->description); ?></p>
            <p>Autor: Nâo está funcionando</p>
        </div>
    </div>

    

    <h1 class="title-bold">
        Projetos Relacionados
    </h1>

    <div id="documents-container">
        <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered" id="table-responsive">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Título</th>
                        <th scope="col">Grande Área</th>
                        <th scope="col">Área</th>
                        <th scope="col">Sub-Área</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $projects_attachs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <th scope="row"><?php echo e($project->id); ?></th>
                            <td><?php echo e($project->title); ?></td>
                            <td><?php echo e($project->big_area->name); ?></td>
                            <td><?php echo e($project->area->name); ?></td>
                            <td><?php echo e($project->sub_area->name); ?></td>
                            <td>Aleatorio</td>
                        </tr>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr class="table-responsive-tr">
                            <th scope="row"></th>
                            <td>Nenhum projeto relacionado</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                    <?php endif; ?>

                </tbody>
            </table>
        </div>

    </div>

    <?php if(Request::route()->getName() === 'edicts.showDashboard'): ?>

        </div>
        </div>

    <?php endif; ?>

    <?php if(Request::route()->getName() === 'edicts.showHome'): ?>
        <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Fabio Gabriel\Desktop\Unilab-Project\resources\views/edicts/showEdict.blade.php ENDPATH**/ ?>