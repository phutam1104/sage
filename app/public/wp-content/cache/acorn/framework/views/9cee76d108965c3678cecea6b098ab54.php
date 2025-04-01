<?php $__env->startSection('content'); ?>
    <?php if(have_rows('flexible_content_field')): ?>
        <?php while(have_rows('flexible_content_field')): ?>
            <?php
                the_row();
                $layout = get_row_layout();
                $data = get_row(true);
            ?>

            <?php if(view()->exists('page.' . $layout)): ?>
                <?php echo $__env->make('page.' . $layout, ['data' => $data], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <?php else: ?>
                <p>Không tìm thấy giao diện cho layout: <?php echo e($layout); ?></p>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Lenovo\Local Sites\sage\app\public\wp-content\themes\sage-theme\resources\views/page.blade.php ENDPATH**/ ?>