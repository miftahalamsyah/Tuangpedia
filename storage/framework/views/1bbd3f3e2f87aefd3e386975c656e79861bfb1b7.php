

<?php $__env->startSection('container'); ?>

<h1 class="mb-5 text-center mb-3"><?php echo e($title); ?></h1>

<div class="row justify-content-center mb-2">
    <div class="col-md-12">
        <form action="/daftarresto">
            <?php if(request('category')): ?>
                <input type="hidden" name="category" value="<?php echo e(request('category')); ?>">
            <?php endif; ?>
            <div class="input-group mb-5">
                <input type="text" class="form-control" placeholder="Cari Resto..." name="search" value="<?php echo e(request('search')); ?>">
                <button class="btn btn-tp" type="submit" >Cari</button>
            </div>
        </form>
    </div>
</div>

<?php if($posts->count()): ?>
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card mb-4 border border-3" style="">
            <div class="row g-0">
                <div class="col-md-4 border border-2"  style=" max-height:300px; overflow:hidden;">
                    <?php if($post->image): ?>
                        <img src="<?php echo e(asset('storage/' . $post->image)); ?>" class="d-block w-100 img-fluid rounded-3" alt="<?php echo e($post->category->name); ?>" style:"max-height:300px;">
                    <?php else: ?>
                        <img src="https://source.unsplash.com/400x300/?food/?<?php echo e($post->category->name); ?>" class="d-block w-100 img-fluid rounded-3" alt="<?php echo e($post->category->name); ?>">
                    <?php endif; ?>
                </div>
            <div class="col-md-8">
                <div class="card-body px-5">
                    <h3 class="card-title"><a href="/daftarresto/<?php echo e($post->slug); ?>" class="text-decoration-none text-dark"><?php echo e($post->resto); ?></a></h3>
                    <small class="text-muted">
                        <p>Kategori : <a href ="/daftarresto?category=<?php echo e($post->category->slug); ?>" class="text-tp-orange text-decoration-none"><?php echo e($post->category->name); ?></a></p>
                    </small>
                    <p class="card-text"><?php echo e($post->excerpt); ?></p>
                    <a href="/daftarresto/<?php echo e($post->slug); ?>" class="text-decoration-none btn btn-tp">Selengkapnya</a>
                </div>
            </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php else: ?>
    <p class="text-center fs-3">Tidak Ada Daftar Resto</p>
<?php endif; ?>
<div class="d-flex justify-content-center">
    <?php echo e($posts->links('vendor.pagination.custom')); ?>

</div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Applications\coba-laravel\resources\views/daftarresto.blade.php ENDPATH**/ ?>