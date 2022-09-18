

<?php $__env->startSection('container'); ?>

    <link href="/css/scrollcarousel.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">

    
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-12">
                <div class="card bg-inverse text-white">
                    <img class="card-img" src="https://source.unsplash.com/1200x400/?food/?">
                    <div class="card-img-overlay h-100 d-flex flex-column justify-content-end mt-3 mb-3">
                        <h2 class="card-title text-center">TuangPedia</h2>
                        <h4 class="card-text text-center">Temukan Resto Sesuai dengan Keinginan Anda</h4>
                        
                        <div class="row justify-content-center mb-2">
                            <div class="col-md-10">
                                <form action="/daftarresto">
                                    <?php if(request('category')): ?>
                                        <input type="hidden" name="category" value="<?php echo e(request('category')); ?>">
                                    <?php endif; ?>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Cari Resto..." name="search" value="<?php echo e(request('search')); ?>">
                                        <button class="btn btn-tp" type="submit" >Cari</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                        
        </div>
    </div>

    
    <section class="border-top" id="yangsedangpopuler">
        <div class="container justify-content-center">
            <div class="row">
                <div class="col-sm-12 mb-5 mt-3">
                    <main>
                        <h4>Yang Terbaru</h4>
                        <div class="grid">
                            <?php $__currentLoopData = $posts->take(5); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="item">
                                    <div class="item-image">
                                        <img src="<?php echo e(asset('storage/' . $post->image)); ?>" class="img-fluid rounded-3" alt="<?php echo e($post->category->name); ?>"  style="min-width:400px; max-width:400px; min-height:250px; max-height:250px; overflow:hidden;">
                                    </div>
                                    <div class="item-content">
                                        <h4 class="item-content-title fs-5 pt-2">
                                            <a href="/daftarresto/<?php echo e($post->slug); ?>" class="text-decoration-none text-dark"><?php echo e($post->resto); ?></a>
                                        </h4>
                                        <small class="text-muted">
                                            <p>Kategori : <a href ="/daftarresto?category=<?php echo e($post->category->slug); ?>" class="text-tp-orange text-decoration-none"><?php echo e($post->category->name); ?></a></p>
                                        </small>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </main>
                </div>
            </div>        
        </div>
    </section>

    
    <section class="border-top" id="untukanda">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 mb-5 mt-3">
                    <main>
                        <h4>Untuk Anda</h4>
                        <div class="grid">
                            <?php $__currentLoopData = $posts->take(10)->skip(5); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="item">
                                    <div class="item-image">
                                        <img src="<?php echo e(asset('storage/' . $post->image)); ?>" class="img-fluid rounded-3" alt="<?php echo e($post->category->name); ?>"  style="min-width:400px; max-width:400px; min-height:250px; max-height:250px; overflow:hidden;">
                                    </div>
                                    <div class="item-content">
                                        <h4 class="item-content-title fs-5 pt-2">
                                            <a href="/daftarresto/<?php echo e($post->slug); ?>" class="text-decoration-none text-dark"><?php echo e($post->resto); ?></a>
                                        </h4>
                                        <small class="text-muted">
                                            <p>Kategori : <a href ="/daftarresto?category=<?php echo e($post->category->slug); ?>" class="text-tp-orange text-decoration-none"><?php echo e($post->category->name); ?></a></p>
                                        </small>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </main>
                </div>
            </div>        
        </div>
    </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Applications\coba-laravel\resources\views/home.blade.php ENDPATH**/ ?>