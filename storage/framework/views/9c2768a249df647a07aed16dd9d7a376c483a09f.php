

<?php $__env->startSection('container'); ?>
<center><h1 class="mb-5">Kategori Resto : <?php echo e($category); ?></h1></center>

    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <article class="mb-5 border-bottom pb-4">
            <h2><a href="/daftarresto/<?php echo e($post->slug); ?>" class="text-decoration-none"><?php echo e($post->resto); ?></a></h2>
            
            <p><?php echo e($post->excerpt); ?></p>
            
            <a href="/daftarresto/<?php echo e($post->slug); ?>" class="text-decoration-none">Selengkapnya...</a>
        </article>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    

    <a href="/categories">Kembali</a>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Applications\coba-laravel\resources\views/category.blade.php ENDPATH**/ ?>