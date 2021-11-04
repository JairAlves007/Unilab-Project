

<?php $__env->startSection('title', 'Anexe um Projeto'); ?>

<?php $__env->startSection('content'); ?>
   <?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

   <div class="d-flex">

      <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <div class="form-create">
         
         

         <h1>Anexe Um Projeto</h1>

         <form action="<?php echo e(route('projects.attach-project', $edict)); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>

            <div id="form-area">
               <div class="form-content">
                  <div class="form-group">
                     <label for="title">Título</label>
                     <input 
                        type="text" 
                        name="title" 
                        class="form-control <?php echo e($errors->has('title') ? 'is-invalid' : ''); ?>" 
                        id="title" 
                     >

                     <div class="invalid-feedback">
                        <?php $__currentLoopData = $errors->get('title'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <?php echo e($error); ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </div>

                  </div>

                  <div class="form-group">

                     <label for="content">Descrição Completa</label>

                     <textarea 
                        class="form-control <?php echo e($errors->has('content') ? 'is-invalid' : ''); ?>" 
                        name="content" 
                        id="content" 
                        rows="3" 
                     ></textarea>

                     <div class="invalid-feedback">
                        <?php $__currentLoopData = $errors->get('content'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <?php echo e($error); ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </div>

                  </div>

                  <div class="form-group">

                     <label for="abstract">Descrição Resumida</label>

                     <textarea 
                        class="form-control <?php echo e($errors->has('abstract') ? 'is-invalid' : ''); ?>" 
                        name="abstract" 
                        id="abstract" 
                        rows="2"
                     ></textarea>

                     <div class="invalid-feedback">
                        <?php $__currentLoopData = $errors->get('abstract'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <?php echo e($error); ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </div>

                  </div>

                  <div class="form-group">

                     <label for="references">Referências</label>

                     <input 
                        type="url" 
                        name="references" 
                        class="form-control <?php echo e($errors->has('references') ? 'is-invalid' : ''); ?>" 
                        id="references"
                     >

                     <div class="invalid-feedback">
                        <?php $__currentLoopData = $errors->get('references'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <?php echo e($error); ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </div>

                  </div>
               </div>

               <div class="form-content">
                  <div class="form-row">

                     <div class="form-group">

                        <label for="archive">Arquivo do Projeto</label>

                        <input 
                           type="file" 
                           name="archive" 
                           class="form-control-file <?php echo e($errors->has('archive') ? 'is-invalid' : ''); ?>" 
                           id="archive"
                        >

                        <div class="invalid-feedback">
                           <?php $__currentLoopData = $errors->get('archive'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <?php echo e($error); ?>

                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>

                     </div>

                  </div>

                  <div class="form-row">

                     <div class="form-group col-md-6">

                        <label for="institutes">Instituto</label>

                        <select 
                           class="form-control <?php echo e($errors->has('institutes') ? 'is-invalid' : ''); ?>" 
                           name="institutes" 
                           id="institutes"
                        >
                           <option value="">
                              Selecione
                           </option>

                           <?php $__currentLoopData = $institutes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $institute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option value="<?php echo e($institute->id); ?>">
                                 <?php echo e($institute->initials); ?> - <?php echo e($institute->name); ?>

                              </option>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>

                        <div class="invalid-feedback">
                           <?php $__currentLoopData = $errors->get('institutes'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <?php echo e($error); ?>

                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>

                     </div>

                     <div class="form-group col-md-6">

                        <label for="specialities">Especialidades</label>

                        <select 
                           class="form-control <?php echo e($errors->has('specialities') ? 'is-invalid' : ''); ?>" 
                           name="specialities" 
                           id="specialities"
                        >
                           <option value="">
                              Selecione
                           </option>

                           <?php $__currentLoopData = $specialities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $specialities): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option value="<?php echo e($specialities->id); ?>"><?php echo e($specialities->name); ?></option>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>

                        <div class="invalid-feedback">
                           <?php $__currentLoopData = $errors->get('specialities'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <?php echo e($error); ?>

                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>

                     </div>

                  </div>

                  <div class="form-row">

                     <div class="form-group col-md-6">

                        <label for="big_areas">Grande Área</label>

                        <select 
                           class="form-control <?php echo e($errors->has('big_areas') ? 'is-invalid' : ''); ?>" 
                           onchange="changeAreas(this)"
                           data-url="<?php echo e(url('/project/findAreas')); ?>" 
                           data-token="<?php echo e(csrf_token()); ?>" 
                           name="big_areas"
                           id="big_areas" 
                        >
                           <option value="">Selecione</option>

                           <?php $__currentLoopData = $big_areas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $area): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option value="<?php echo e($area->id); ?>">
                                 <?php echo e($area->name); ?>

                              </option>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </select>

                        <div class="invalid-feedback">
                           <?php $__currentLoopData = $errors->get('big_areas'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <?php echo e($error); ?>

                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>

                     </div>

                     <div class="form-group col-md-6">

                        <label for="areas">Área</label>

                        <select 
                           class="form-control <?php echo e($errors->has('areas') ? 'is-invalid' : ''); ?>" 
                           onchange="changeSubAreas(this)"
                           data-url="<?php echo e(url('/project/findSubAreas')); ?>" 
                           data-token="<?php echo e(csrf_token()); ?>" 
                           name="areas"
                           id="areas" 
                           disabled
                        >

                           <option value="">
                              Selecione
                           </option>

                        </select>

                        <div class="invalid-feedback">
                           <?php $__currentLoopData = $errors->get('areas'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <?php echo e($error); ?>

                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>

                     </div>

                  </div>

                  <div class="form-row">

                     <div class="form-group col-md-12">

                        <label for="sub_areas">Sub Área</label>

                        <select 
                           class="form-control <?php echo e($errors->has('sub_areas') ? 'is-invalid' : ''); ?>" 
                           name="sub_areas" 
                           id="sub_areas" 
                           disabled
                        >
                           <option value="">
                              Selecione
                           </option>
                        </select>

                        <div class="invalid-feedback">
                           <?php $__currentLoopData = $errors->get('sub_areas'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <?php echo e($error); ?>

                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                     </div>
                  </div>

               </div>
            </div>

         </div>


            <button type="submit" class="btn btn-primary" id="btnFiltra">Anexar</button>
         </form>
      </div>

   </div>

   <?php $__env->startSection('script'); ?>
      <script>
         function changeAreas(response) {
            $.ajax({
               url: $(response).data('url'),
               type: 'post',
               data: {
                  _method: 'post',
                  _token: $(response).data('token'),
                  big_areas_id: response.value
               },
               
               success: function(res) {
                  $("#areas").empty();

                  $("#sub_areas").empty();

                  $("#areas").removeAttr('disabled');
                  
                  $("#sub_areas").prop('disabled', 'true');

                  $('#areas').append($('<option>', {
                     value: "",
                     text: "Selecione"
                  }));

                  $('#sub_areas').append($('<option>', {
                     value: "",
                     text: "Selecione"
                  }));

                  $.each(res, function(index, value) {
                     $('#areas').append($('<option>', {
                        value: value['id'],
                        text: value['name']
                     }));
                  });
               },
               error: function() {
                  alert('error');
               },
            });
         }

         function changeSubAreas(response) {
            $.ajax({
               url: $(response).data('url'),
               type: 'post',
               data: {
                  _method: 'post',
                  _token: $(response).data('token'),
                  sub_areas_id: response.value
               },
               success: function(res) {
                  $("#sub_areas").empty();

                  $("#sub_areas").removeAttr('disabled');

                  $('#sub_areas').append($('<option>', {
                     value: "",
                     text: "Selecione"
                  }));

                  $.each(res, function(index, value) {
                     $('#sub_areas').append($('<option>', {
                        value: value['id'],
                        text: value['name']
                     }));
                  });
               },
               error: function() {
                  alert('error');
               },
            });
         }
      </script>
   <?php $__env->stopSection(); ?>
   
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Fabio Gabriel\Desktop\Unilab-Project\resources\views/projects/formAttachProject.blade.php ENDPATH**/ ?>