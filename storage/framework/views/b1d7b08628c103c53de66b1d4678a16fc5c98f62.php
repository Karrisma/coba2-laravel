


<?php $__env->startSection('container'); ?>
<article>
    <h2><?php echo e($post->title); ?></h2>
    <h5><?php echo e($post->author); ?></h5>
    <?php echo e($post->excerpt); ?>

</article>

<a href="/blog">Back To Posts</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Aplikasi\coba2-laravel\resources\views/post.blade.php ENDPATH**/ ?>