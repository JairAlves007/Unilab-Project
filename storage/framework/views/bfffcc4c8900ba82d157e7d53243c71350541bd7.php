

<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make("layouts.navbarWelcome", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <section class="search-bar">
        <div class="container">
            <div class="row">
                <div class="mx-auto col-lg-10">
                    <h1 class="title">Sistema de Fluxo Contínuo</h1>
                    <form action="/search" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="input-group">
                            <input type="search" name="search" placeholder="Busque um Edital" class="form-control form-control-lg border-right-0">
                            <button class="btn-lg btn-danger border border-danger border-lef-0 button-search" type="submit">
                                <i class="fa fa-fw fa-search"></i>
                                Buscar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php if(isset($search)): ?>
        <h1 class="title2">Buscando Por: <?php echo e($search); ?></h1>
    <?php else: ?>
        <h1 class="title2">Editais</h1>
    <?php endif; ?>

    <div class="content" id="edicts-home">
        <?php $__currentLoopData = $edicts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $edict): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo e($edict->title); ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted">Submetido:
                        <?php echo e(date('d-m-Y', strtotime($edict->submission_start))); ?></h6>
                    <p class="card-text"><?php echo e($edict->description); ?></p>

                    <a href="<?php echo e(route('edicts.showHome', $edict)); ?>" class="btn btn-primary">Ver Mais</a>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>

    <div class="d-flex justify-content-center text-primary">
        <?php if(isset($filters)): ?>

            <?php echo $edicts->appends($filters)->links(); ?>


        <?php else: ?>
            <?php echo $edicts->links(); ?>

        <?php endif; ?>

    </div>

    <?php if(count($edicts) == 0 && isset($search)): ?>
        <p>Não foi possível encontrar nenhum edital com <?php echo e($search); ?></p> <a href="/">Voltar a Home</a>
    <?php elseif(count($edicts) == 0): ?>
        <p>Não há editais disponíveis</p>
    <?php endif; ?>

    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Fabio Gabriel\Desktop\Unilab-Project\resources\views/welcome.blade.php ENDPATH**/ ?>