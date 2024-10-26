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
        求職一覧
     <?php $__env->endSlot(); ?>
        <h1>求職一覧</h1>
        <?php if(session('message')): ?>
        <?php if (isset($component)) { $__componentOriginal5194778a3a7b899dcee5619d0610f5cf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5194778a3a7b899dcee5619d0610f5cf = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.alert','data' => ['class' => 'info']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'info']); ?>
            <?php echo e(session('message')); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5194778a3a7b899dcee5619d0610f5cf)): ?>
<?php $attributes = $__attributesOriginal5194778a3a7b899dcee5619d0610f5cf; ?>
<?php unset($__attributesOriginal5194778a3a7b899dcee5619d0610f5cf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5194778a3a7b899dcee5619d0610f5cf)): ?>
<?php $component = $__componentOriginal5194778a3a7b899dcee5619d0610f5cf; ?>
<?php unset($__componentOriginal5194778a3a7b899dcee5619d0610f5cf); ?>
<?php endif; ?>
    <?php endif; ?>
    <a href="<?php echo e(route('seeker.create')); ?>">追加</a>
    <?php if (isset($component)) { $__componentOriginal691fc44664bd5a765ac5bdcedcb9f4d4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal691fc44664bd5a765ac5bdcedcb9f4d4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.seeker-table','data' => ['seekers' => $seekers]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('seeker-table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['seekers' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($seekers)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal691fc44664bd5a765ac5bdcedcb9f4d4)): ?>
<?php $attributes = $__attributesOriginal691fc44664bd5a765ac5bdcedcb9f4d4; ?>
<?php unset($__attributesOriginal691fc44664bd5a765ac5bdcedcb9f4d4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal691fc44664bd5a765ac5bdcedcb9f4d4)): ?>
<?php $component = $__componentOriginal691fc44664bd5a765ac5bdcedcb9f4d4; ?>
<?php unset($__componentOriginal691fc44664bd5a765ac5bdcedcb9f4d4); ?>
<?php endif; ?>
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
<?php /**PATH /var/www/html/resources/views/admin/seeker/index.blade.php ENDPATH**/ ?>