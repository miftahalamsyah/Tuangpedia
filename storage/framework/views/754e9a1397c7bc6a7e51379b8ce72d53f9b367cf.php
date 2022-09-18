

<?php $__env->startSection('container'); ?>

<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h1 class="mb-3"><?php echo e($post->resto); ?></h1>

            <a href="" class="btn btn-tp"><span data-feather="arrow-left"></span>Kembali</a>
            <a href="" class="btn btn-tp-orange"><span data-feather="edit"></span>Ubah</a>
            <a href="" class="btn btn-danger"><span data-feather="x-circle"></span>Hapus</a>
            


            
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Applications\coba-laravel\resources\views/dashboard/daftarresto/show.blade.php ENDPATH**/ ?>