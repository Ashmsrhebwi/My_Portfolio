


<?php $__env->startSection('title', 'Add Statistic'); ?>

<?php $__env->startSection('content'); ?>
<div class="card create-edit-card">
    <h1>Add New Statistic</h1>
    <p class="text-muted">Create a new statistic for your portfolio</p>

    <form action="<?php echo e(route('admin.statistics.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" id="title" class="form-control" 
                           placeholder="e.g. Web Development" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="value" class="form-label">Value (%)</label>
                    <input type="number" name="value" id="value" class="form-control" 
                           min="0" max="100" placeholder="e.g. 85" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="icon" class="form-label">Icon (FontAwesome)</label>
                    <input type="text" name="icon" id="icon" class="form-control" 
                           placeholder="e.g. fas fa-code">
                    <div class="text-muted small mt-1">
                        Example: fas fa-code, fab fa-js, fas fa-palette
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="order" class="form-label">Display Order</label>
                    <input type="number" name="order" id="order" class="form-control" 
                           placeholder="e.g. 1" value="0">
                    <div class="text-muted small mt-1">
                        Lower numbers appear first
                    </div>
                </div>
            </div>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i> Create Statistic
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
<?php echo $__env->make('admin.layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Shahm.s\Desktop\MyPortfilio\laravel\resources\views/admin/statistics/create.blade.php ENDPATH**/ ?>