<div style="color:red">
    <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
            <?php if($loop->iteration >= 2): ?>
                <?php break; ?>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php if($has2MoreErrors()): ?>
            ...以下略
        <?php endif; ?>
    </ul>
</div>
<?php /**PATH /var/www/html/resources/views/components/error-messages.blade.php ENDPATH**/ ?>