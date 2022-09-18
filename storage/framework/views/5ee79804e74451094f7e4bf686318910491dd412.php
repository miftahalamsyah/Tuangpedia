

<?php $__env->startSection('container'); ?>
<center><h1 class="mb-5">Daftar Resto</h1></center>
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <article class="mb-5">
            <h2><a href="/posts/<?php echo e($post->slug); ?>"><?php echo e($post->resto); ?></a></h2>
            <p><?php echo e($post->excerpt); ?>

        </article>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Applications\coba-laravel\resources\views/posts.blade.php ENDPATH**/ ?>