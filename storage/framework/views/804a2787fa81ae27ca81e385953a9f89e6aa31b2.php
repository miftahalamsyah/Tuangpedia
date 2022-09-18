

<?php $__env->startSection('container'); ?>

    <div class="container">
        <div class="resto" id="resto" style="">
            <div class="row justify-content-center mb-2">
                <div class="col-md-10">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" style="max-height: 400px; overflow:hidden;">
                                <?php if($post->image): ?>
                                    <img src="<?php echo e(asset('storage/' . $post->image)); ?>" class="d-block w-100 img-fluid rounded-3" alt="<?php echo e($post->category->name); ?>">
                                <?php else: ?>
                                    <img src="https://source.unsplash.com/1200x400/?food/?<?php echo e($post->category->name); ?>" class="d-block w-100 img-fluid rounded-3" alt="<?php echo e($post->category->name); ?>">
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    
                    <h1 class="mb-2 mt-2"><?php echo e($post->resto); ?></h1>
                    
                    <small class="text-muted">
                          <p>Kategori : <a href ="/daftarresto?category=<?php echo e($post->category->slug); ?>" class="text-tp-orange text-decoration-none"><?php echo e($post->category->name); ?></a></p>
                    </small>

                    <div id="resto_info" class="row justify-content-center">
                        <ul class="col-sm-5">
                            <li>
                                <span class="fw-bold">Jam Buka</span>
                                <p><?php echo e($post->buka); ?></p>
                            </li>
                            <li>
                                <span class="fw-bold">Sajian</span>
                                <p><?php echo e($post->sajian); ?></p>
                            </li>
                        </ul>
                        <ul class="col-sm-5">
                            <li>
                                <span class="fw-bold">Alamat</span>
                                <p><?php echo e($post->alamat); ?></p>
                            </li>
                            <li>
                                <span class="fw-bold">Jangkauan Harga</span>
                                <p><?php echo e($post->harga); ?></p>
                            </li>
                        </ul>
                    </div>

                    <article class="my-3 fs-7">
                        <?php echo $post->body; ?>

                    </article>
                </div>
            </div>
        </div>
    </div>
    
    

    <section class="komentar border-top" id="komentar">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 mb-5 mt-4">    
                    <h4>Komentar</h4>
                    <div class="mt-3">
                        <?php echo $__env->make('comments::components.comments', ['model' => $post], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>
            </div>        
        </div>
    </section>

    
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Applications\coba-laravel\resources\views/post.blade.php ENDPATH**/ ?>