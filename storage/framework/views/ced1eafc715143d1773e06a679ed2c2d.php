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
            求職登録
         <?php $__env->endSlot(); ?>
        <h1>求職登録</h1>
        <?php if($errors->any()): ?>
        <?php if (isset($component)) { $__componentOriginal5194778a3a7b899dcee5619d0610f5cf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5194778a3a7b899dcee5619d0610f5cf = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.alert','data' => ['class' => 'danger']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'danger']); ?>
            <?php if (isset($component)) { $__componentOriginal51472a29f5f03f92809624d34cbd0889 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal51472a29f5f03f92809624d34cbd0889 = $attributes; } ?>
<?php $component = App\View\Components\ErrorMessages::resolve(['errors' => $errors] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('error-messages'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\ErrorMessages::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal51472a29f5f03f92809624d34cbd0889)): ?>
<?php $attributes = $__attributesOriginal51472a29f5f03f92809624d34cbd0889; ?>
<?php unset($__attributesOriginal51472a29f5f03f92809624d34cbd0889); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal51472a29f5f03f92809624d34cbd0889)): ?>
<?php $component = $__componentOriginal51472a29f5f03f92809624d34cbd0889; ?>
<?php unset($__componentOriginal51472a29f5f03f92809624d34cbd0889); ?>
<?php endif; ?>
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
        <form action="<?php echo e(route('seeker.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div>
                <label>業務内容</label>
                <select name="category_id">
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($category->id); ?>"
                        <?php if($category->id == old('category_id')): echo 'selected'; endif; ?>>
                            <?php echo e($category->title); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div>
                <label>コメント</label>
                <input type="text" name="title"
                    value="<?php echo e(old('title')); ?>">
            </div>
            <div>
                <label>価格</label>
                <input type="text" name="price"
                    value="<?php echo e(old('price')); ?>">
            </div>
            <input type="submit" value="送信">
        </form>
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
<?php /**PATH /var/www/html/resources/views/admin/seeker/create.blade.php ENDPATH**/ ?>