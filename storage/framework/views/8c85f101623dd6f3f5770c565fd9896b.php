

<?php $__env->startSection('title', 'Edit Service'); ?>

<?php $__env->startSection('content'); ?>
<div class="card">
    <h1>Edit Service</h1>
    <span class="text-muted">Update service information</span>
    
    <form action="<?php echo e(route('admin.services.update', $service->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        
        <div class="form-group">
            <label for="name">Service Name *</label>
            <input type="text" name="name" id="name" class="form-control" 
                   value="<?php echo e(old('name', $service->name)); ?>" required>
            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="text-danger"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        
        <div class="form-group">
            <label for="icon">Icon Class *</label>
            <input type="text" name="icon" id="icon" class="form-control" 
                   value="<?php echo e(old('icon', $service->icon)); ?>" required placeholder="fas fa-cog">
            <small class="text-muted">Enter Font Awesome icon class (e.g., fas fa-cog, fas fa-laptop-code)</small>
            <?php $__errorArgs = ['icon'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="text-danger"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            
            <div class="icon-preview">
                <h6>Preview:</h6>
                <div class="preview-box">
                    <i id="icon-preview" class="<?php echo e(old('icon', $service->icon)); ?>"></i>
                    <span id="icon-text"><?php echo e(old('icon', $service->icon)); ?></span>
                </div>
            </div>
        </div>
        
        <div class="form-actions">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i> Update Service
            </button>
            <a href="<?php echo e(route('admin.services.index')); ?>" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Cancel
            </a>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
<?php echo $__env->make('admin.services.styles', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('scripts'); ?>
<?php echo $__env->make('admin.services.editScripts', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Shahm.s\Desktop\MyPortfilio\laravel\resources\views/admin/services/edit.blade.php ENDPATH**/ ?>