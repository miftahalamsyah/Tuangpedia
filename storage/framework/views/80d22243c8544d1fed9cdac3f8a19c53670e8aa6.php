

<?php $__env->startSection('container'); ?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Daftar Resto di TuangPedia</h1>
</div>

<?php if(session()->has('success')): ?>
  <div class="alert alert-success col-lg-10" role="alert">
    <?php echo e(session('success')); ?>

  </div>
<?php endif; ?>

<div class="table-responsive col-lg-10 mb-5">
    <a href="/dashboard/daftarresto/create" class="btn btn-tp mb-3">Tambahkan Resto Baru</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No.</th>
          <th scope="col">Nama Resto</th>
          <th scope="col">Kategori</th>
        </tr>
      </thead>
      <tbody>
          <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($loop->iteration); ?></td>
                <td><?php echo e($post->resto); ?></td>
                <td><?php echo e($post->category->name); ?></td>
            </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
  </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Applications\coba-laravel\resources\views/dashboard/daftarresto/index.blade.php ENDPATH**/ ?>