<table border="1">
    <tr>
        <th>業務内容</th>
        <th>コメント</th>
        <th>価格</th>
        <th>更新</th>
        <th>削除</th>
    </tr>
    <?php $__currentLoopData = $seekers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seeker): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr <?php if($loop->even): ?> style="background-color:#E0E0E0" <?php endif; ?>>
            <td><?php echo e($seeker->category->title); ?></td>
            <td>
                <a href="<?php echo e(route('seeker.show', $seeker)); ?>">
                    <?php echo e($seeker->title); ?>

                </a>
            </td>
            <td><?php echo e($seeker->price); ?></td>
            <td>
                <a href="<?php echo e(route('seeker.edit', $seeker)); ?>">
                    <button>更新</button>
                </a>
            </td>
            <td>
                <form action="<?php echo e(route('seeker.destroy', $seeker)); ?>"
                    method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <input type="submit" value="削除">
                </form>
            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php /**PATH /var/www/html/resources/views/components/seeker-table.blade.php ENDPATH**/ ?>