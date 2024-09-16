

<?php $__env->startSection('container'); ?>

   <h1>Curiculum Vitei</h1> 
   <img src="img/<?php echo e($image); ?>" alt="<?php echo e($name); ?>" width="200" class="img-thumbnail rounded-circle">
   <h5><?php echo e($name); ?></h5>
   <h5><?php echo e($address); ?></h5>
   <h5><?php echo e($email); ?></h5>
  
   <h5><?php echo e($pendidikan); ?></h5>
   <h5><?php echo e($organisasi); ?></h5>
   <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Aplikasi\coba2-laravel\resources\views/about.blade.php ENDPATH**/ ?>