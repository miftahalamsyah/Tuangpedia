<style>
    .btn-tp {
        color: #fff;
        background-color: #225675;
        border-color: #225675;
    }
    .btn-tp-orange {
        color: #fff;
        background-color: #E6873C;
        border-color: #E6873C;
    }
    .btn-tp-border {
    color: #fff;
    border-color:#225675;
    }
    .bg-tp {
        background-color: #225675;
    }
    .text-tp{
        color:#225675;
    }
</style>

<?php if($paginator->hasPages()): ?>
<ul class="pager">
   
    <?php if($paginator->onFirstPage()): ?>
        <li class="btn btn-tp-border disabled text-decoration none text-dark"><span>← Sebelumnya</span></li>
    <?php else: ?>
        <li class="btn btn-tp-border"><a href="<?php echo e($paginator->previousPageUrl()); ?>" rel="prev" class=" text-tp text-decoration-none">← Previous</a></li>
    <?php endif; ?>


  
    <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       
        <?php if(is_string($element)): ?>
            <li class="disabled"><span><?php echo e($element); ?></span></li>
        <?php endif; ?>


       
        <?php if(is_array($element)): ?>
            <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($page == $paginator->currentPage()): ?>
                    <li class="active my-active btn btn-tp text-decoration none"><span><?php echo e($page); ?></span></li>
                <?php else: ?>
                    <li class="btn btn-tp-border"><a href="<?php echo e($url); ?>" class="text-tp text-decoration-none"><?php echo e($page); ?></a></li>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    
    <?php if($paginator->hasMorePages()): ?>
        <li class="btn btn-tp-border"><a href="<?php echo e($paginator->nextPageUrl()); ?>" rel="next" class=" text-tp text-decoration-none">Selanjutnya →</a></li>
    <?php else: ?>
        <li class="btn btn-tp-border disabled text-dark"><span>Next →</span></li>
    <?php endif; ?>
</ul>
<?php endif; ?> <?php /**PATH D:\Applications\coba-laravel\resources\views/vendor/pagination/custom.blade.php ENDPATH**/ ?>