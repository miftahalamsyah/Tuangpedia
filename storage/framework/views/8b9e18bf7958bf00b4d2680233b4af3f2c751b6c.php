

<?php $__env->startSection('container'); ?>
    <center><h1 class="mb-5">Kategori Resto</h1></center>
    
    <div class="container">
        <div class="row">
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4" style="min-height: 400px;">
                <a href="/daftarresto?category=<?php echo e($category->slug); ?>">
                    <div class="card bg-dark text-white border border-3">
                        <img src="https://source.unsplash.com/400x300/?food/?<?php echo e($category->name); ?>" class="img-fluid rounded-start" alt="<?php echo e($category->name); ?>">
                            <div class="card-img-overlay d-flex align-items-center p-0">
                            <h5 class="card-title text-center flex-fill p-4 font-size-3" style="background-color: rgba(0,0,0,0.7) "><?php echo e($category->name); ?></h5>
                        </div>
                    </div>
                </a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>  
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Applications\coba-laravel\resources\views/categories.blade.php ENDPATH**/ ?>