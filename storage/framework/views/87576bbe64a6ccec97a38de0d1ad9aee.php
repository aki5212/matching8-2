<?php if (isset($component)) { $__componentOriginal5e196b0c9cc520492ea30319574dfde6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5e196b0c9cc520492ea30319574dfde6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.seeker-manager','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.seeker-manager'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('title', null, []); ?> 
        求職詳細
     <?php $__env->endSlot(); ?>
    <h1>求職詳細</h1>
    <ul>
        <li>ID：<?php echo e($seeker->id); ?></li>
        <li>業務内容：<?php echo e($seeker->category->title); ?></li>
        <li>コメント：<?php echo e($seeker->title); ?></li>
        <li>価格：<?php echo e($seeker->price); ?></li>
        <li>求人：
            <ul>
                <?php $__currentLoopData = $seeker->employers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($employer->name); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </li>
    </ul>
    <a href="<?php echo e(route('seeker.index')); ?>">戻る</a>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5e196b0c9cc520492ea30319574dfde6)): ?>
<?php $attributes = $__attributesOriginal5e196b0c9cc520492ea30319574dfde6; ?>
<?php unset($__attributesOriginal5e196b0c9cc520492ea30319574dfde6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5e196b0c9cc520492ea30319574dfde6)): ?>
<?php $component = $__componentOriginal5e196b0c9cc520492ea30319574dfde6; ?>
<?php unset($__componentOriginal5e196b0c9cc520492ea30319574dfde6); ?>
<?php endif; ?>
<?php /**PATH /var/www/html/resources/views/admin/seeker/show.blade.php ENDPATH**/ ?>