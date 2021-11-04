<?php if(session('msg')): ?>
   <div class="alert alert-success" role="alert">
      <?php echo e(session('msg')); ?>

      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">&times;</span>
      </button>
   </div>
<?php endif; ?><?php /**PATH C:\Users\Fabio Gabriel\Desktop\Unilab-Project\resources\views/hintMessages.blade.php ENDPATH**/ ?>