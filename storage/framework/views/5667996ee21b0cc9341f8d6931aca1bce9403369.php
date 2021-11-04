

<?php $__env->startSection('title', 'Crie seu Edital'); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="d-flex">

    <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="form-create">

        <h1>Crie Um Edital</h1>

        <?php echo $__env->make('errors.cardMessage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <form action="/edict/store" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>

            <div id="form-area">
                <div class="form-content">
                    <div class="form-group">
                        <label for="title">Titulo do Edital</label>
                        <input type="text" name="title" class="form-control" id="title"
                            placeholder="Insira o Titulo Aqui...">
                    </div>

                    <div class="form-group">
                        <label for="archive">Arquivo do Edital</label>
                        <input type="file" name="archive" class="form-control-file" id="archive">
                    </div>

                    <div class="form-group">
                        <label for="description">Descrição do Edital</label>
                        <textarea class="form-control" name="description" id="description" rows="5"
                            placeholder="Insira a Descrição Aqui..."></textarea>
                    </div>
                </div>

                <div class="form-content">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="submission_start">Início da Submissão</label>
                            <input type="date" name="submission_start" id="submission_start" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="submission_finish">Término da Submissão</label>
                            <input type="date" name="submission_finish" id="submission_finish" class="form-control">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="rate_start">Início da Avaliação</label>
                            <input type="date" name="rate_start" id="rate_start" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="rate_finish">Término da Avaliação</label>
                            <input type="date" name="rate_finish" id="rate_finish" class="form-control">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="execution_start">Início da Execução</label>
                            <input type="date" name="execution_start" id="execution_start" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="execution_finish">Término da Execução</label>
                            <input type="date" name="execution_finish" id="execution_finish" class="form-control">
                        </div>
                    </div>

                    <div class="form-row">

                        <div class="form-group col-md-6">
                            <label for="min_titulation">Titulação Mínima</label>
                            <select class="form-control" name="min_titulations_id" id="min_titulation">
                                <?php $__currentLoopData = $min_titulations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $titulation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($titulation->id); ?>"><?php echo e($titulation->titulation); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="category">Categoria</label>
                            <select class="form-control" name="categories_id" id="category">
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>

                </div>
            </div>

            <button type="submit" class="btn btn-success">Criar Edital</button>
        </form>
    </div>
    
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Fabio Gabriel\Desktop\Unilab-Project\resources\views/edicts/createEdict.blade.php ENDPATH**/ ?>