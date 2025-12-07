


<?php $__env->startSection('title', 'Add Work'); ?>

<?php $__env->startSection('content'); ?>
<div class="card create-edit-card">
    <h1>Add New Work</h1>
    <p class="text-muted">Create a new project for your portfolio</p>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger mb-4">
            <div class="d-flex align-items-center gap-2 mb-2">
                <i class="fas fa-exclamation-triangle"></i>
                <strong>Please fix the following errors:</strong>
            </div>
            <ul class="mb-0">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('admin.works.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="title" class="form-label">Project Title</label>
                    <input type="text" name="title" id="title" class="form-control" 
                           value="<?php echo e(old('title')); ?>" placeholder="e.g. E-commerce Website" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="link" class="form-label">Project Link</label>
                    <input type="url" name="link" id="link" class="form-control" 
                           value="<?php echo e(old('link')); ?>" placeholder="https://example.com">
                </div>
            </div>
        </div>

        <div class="form-group mb-3">
            <label for="description" class="form-label">Project Description</label>
            <textarea name="description" id="description" class="form-control" 
                      rows="4" placeholder="Describe your project..."><?php echo e(old('description')); ?></textarea>
        </div>

        <div class="form-group mb-4">
            <label for="image" class="form-label">Image URL</label>
            <input type="url" name="image" id="image" class="form-control" 
                   value="<?php echo e(old('image')); ?>" placeholder="https://example.com/image.jpg">
            <div class="text-muted small mt-1">
                Enter the full URL of your project image
            </div>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i> Save Work
            </button>
            <a href="<?php echo e(route('admin.works.index')); ?>" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Cancel
            </a>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
<?php echo $__env->make('admin.works.styles', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Shahm.s\Desktop\MyPortfilio\laravel\resources\views/admin/works/create.blade.php ENDPATH**/ ?>