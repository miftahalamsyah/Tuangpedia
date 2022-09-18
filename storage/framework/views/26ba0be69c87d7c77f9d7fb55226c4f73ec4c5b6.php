


<?php $__env->startSection('container'); ?>

<div class="row justify-content-center">
    <div class="col-md-5">
        
        <?php if(session()->has('success')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php echo e(session('success')); ?>

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php endif; ?>

        <?php if(session()->has('loginError')): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?php echo e(session('loginError')); ?>

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php endif; ?>

        <main class="form-signin">
            <img class="mb-6 rounded mx-auto d-block" src="/img/tuangpedialogo.png" alt="tuangpedialogo" width="206" height="126">
            <h1 class="h3 mb-3 fw-normal text-center">Masuk</h1>
            <form action="/masuk" method="post">
                <?php echo csrf_field(); ?>
                <div class="form-floating">
                    <input type="email" name="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="email" placeholder="name@example.com" autofocus required value="<?php echo e(old('email')); ?>">
                    <label for="email">Alamat Email</label>
                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-feedback">
                        <?php echo e($message); ?>

                    </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                    <label for="password">Kata Sandi</label>
                </div>
                <button class="w-100 btn btn-lg btn-tp" type="submit">Masuk</button>
            </form>
            <br>
            <small><p class="text-center mb-0 pt-2 border-top">Belum Punya Akun?</p></small>
            <button class="w-100 btn btn-lg btn-tp-orange border-top mt-2" type="submit"><a href="/registrasi" class="text-decoration-none text-white">Registrasi</a></button>
        </main>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Applications\coba-laravel\resources\views/login/index.blade.php ENDPATH**/ ?>