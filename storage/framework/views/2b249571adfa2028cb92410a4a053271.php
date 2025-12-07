


<?php $__env->startSection('title', 'Edit Statistic'); ?>

<?php $__env->startSection('content'); ?>
<div class="card create-edit-card">
    <h1>Edit Statistic</h1>
    <p class="text-muted">Update statistic information</p>

    <form action="<?php echo e(route('admin.statistics.update', $statistic->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        
        <div class="row">
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" id="title" class="form-control" 
                           value="<?php echo e(old('title', $statistic->title)); ?>" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="value" class="form-label">Value (%)</label>
                    <input type="number" name="value" id="value" class="form-control" 
                           min="0" max="100" value="<?php echo e(old('value', $statistic->value)); ?>" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="icon" class="form-label">Icon (FontAwesome)</label>
                    <input type="text" name="icon" id="icon" class="form-control" 
                           value="<?php echo e(old('icon', $statistic->icon)); ?>" placeholder="e.g. fas fa-code">
                    <?php if($statistic->icon): ?>
                    <div class="current-icon">
                        <span class="text-muted small">Current icon:</span>
                        <i class="<?php echo e($statistic->icon); ?>"></i>
                        <span class="text-muted small"><?php echo e($statistic->icon); ?></span>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="order" class="form-label">Display Order</label>
                    <input type="number" name="order" id="order" class="form-control" 
                           value="<?php echo e(old('order', $statistic->order)); ?>">
                </div>
            </div>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i> Update Statistic
            </button>
            <a href="<?php echo e(route('admin.statistics.index')); ?>" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Cancel
            </a>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
<?php echo $__env->make('admin.statistics.styles', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Shahm.s\Desktop\MyPortfilio\laravel\resources\views/admin/statistics/edit.blade.php ENDPATH**/ ?>