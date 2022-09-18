<?php $markdown = app('Parsedown'); ?>
<?php
    // TODO: There should be a better place for this.
    $markdown->setSafeMode(true);
?>

<div id="comment-<?php echo e($comment->getKey()); ?>" class="media">
    <div class="media-body">
        <h6 class="mt-0 mb-1"><?php echo e($comment->commenter->name ?? $comment->guest_name); ?> <small class="text-muted">- <?php echo e($comment->created_at->diffForHumans()); ?></small></h6>
        <div style="white-space: pre-wrap;"><?php echo $markdown->line($comment->comment); ?></div>
        <div>
            
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete-comment', $comment)): ?>
                <a href="<?php echo e(route('comments.destroy', $comment->getKey())); ?>" onclick="event.preventDefault();document.getElementById('comment-delete-form-<?php echo e($comment->getKey()); ?>').submit();" class="fs-6 text-danger text-uppercase"style="width:3rem"><?php echo app('translator')->get('comments::comments.delete'); ?></a>
                <form id="comment-delete-form-<?php echo e($comment->getKey()); ?>" action="<?php echo e(route('comments.destroy', $comment->getKey())); ?>" method="POST" style="display: none;">
                    <?php echo method_field('DELETE'); ?>
                    <?php echo csrf_field(); ?>
                </form>
            <?php endif; ?>
        </div>

        

        <br />

        <?php
            if (!isset($indentationLevel)) {
                $indentationLevel = 1;
            } else {
                $indentationLevel++;
            }
        ?>

        
        <?php if($grouped_comments->has($comment->getKey()) && $indentationLevel <= $maxIndentationLevel): ?>
            
            <?php $__currentLoopData = $grouped_comments[$comment->getKey()]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo $__env->make('comments::_comment', [
                    'comment' => $child,
                    'grouped_comments' => $grouped_comments
                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>

    </div>
</div>


<?php if($grouped_comments->has($comment->getKey()) && $indentationLevel > $maxIndentationLevel): ?>
    
    <?php $__currentLoopData = $grouped_comments[$comment->getKey()]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo $__env->make('comments::_comment', [
            'comment' => $child,
            'grouped_comments' => $grouped_comments
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?><?php /**PATH D:\Applications\coba-laravel\resources\views/vendor/comments/_comment.blade.php ENDPATH**/ ?>