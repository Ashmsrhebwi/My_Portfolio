


<?php $__env->startSection('title', 'Edit Work'); ?>

<?php $__env->startSection('content'); ?>
<div class="card create-edit-card">
    <h1>Edit Work</h1>
    <p class="text-muted">Update project information</p>

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

    <form action="<?php echo e(route('admin.works.update', $work)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        
        <div class="row">
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="title" class="form-label">Project Title</label>
                    <input type="text" name="title" id="title" class="form-control" 
                           value="<?php echo e(old('title', $work->title)); ?>" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="link" class="form-label">Project Link</label>
                    <input type="url" name="link" id="link" class="form-control" 
                           value="<?php echo e(old('link', $work->link)); ?>">
                </div>
            </div>
        </div>

        <div class="form-group mb-3">
            <label for="description" class="form-label">Project Description</label>
            <textarea name="description" id="description" class="form-control" 
                      rows="4"><?php echo e(old('description', $work->description)); ?></textarea>
        </div>

        <div class="form-group mb-4">
            <label for="image" class="form-label">Image URL</label>
            <input type="url" name="image" id="image" class="form-control" 
                   value="<?php echo e(old('image', $work->image)); ?>">
            <?php if($work->image): ?>
            <div class="mt-2">
                <span class="text-muted small">Current image:</span>
                <img src="<?php echo e($work->image); ?>" width="80" height="80" 
                     alt="Current image">
            </div>
            <?php endif; ?>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i> Update Work
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
<?php echo $__env->make('admin.layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Shahm.s\Desktop\MyPortfilio\laravel\resources\views/admin/works/edit.blade.php ENDPATH**/ ?>