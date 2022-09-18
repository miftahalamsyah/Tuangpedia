

<?php $__env->startSection('container'); ?>
    <article>
        <h2><?php echo e($post["title"]); ?></h2>
        <h5><?php echo e($post["author"]); ?></h5>
        <p><?php echo e($post["body"]); ?> </p>    
    </article>
    <a href="/posts">Kembali</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Applications\coba-laravel\resources\views/daftar_resto.blade.php ENDPATH**/ ?>