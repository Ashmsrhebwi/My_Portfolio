

<?php $__env->startSection('title', 'Manage Services'); ?>

<?php $__env->startSection('content'); ?>
<div class="card">
    <h1>Our Services</h1>
    <span class="text-muted">Manage your portfolio services and offerings</span>
    
    <a href="<?php echo e(route('admin.services.create')); ?>" class="btn btn-primary mb-4">
        <i class="fas fa-plus"></i> Add New Service
    </a>

    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <i class="fas fa-check-circle"></i> <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <?php if(session('error')): ?>
        <div class="alert alert-danger">
            <i class="fas fa-exclamation-circle"></i> <?php echo e(session('error')); ?>

        </div>
    <?php endif; ?>

    <?php if($services->count() > 0): ?>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Service Name</th>
                    <th>Icon</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($i+1); ?></td>
                    <td>
                        <strong><?php echo e($service->name); ?></strong>
                    </td>
                    <td>
                        <?php if($service->icon): ?>
                            <div class="d-flex align-items-center gap-3">
                                <div class="service-icon-preview">
                                    <i class="<?php echo e($service->icon); ?>"></i>
                                </div>
                                <span class="text-muted"><?php echo e($service->icon); ?></span>
                            </div>
                        <?php else: ?>
                            <span class="text-muted">No icon</span>
                        <?php endif; ?>
                    </td>
                    <td>
                        <div class="actions">
                            <a href="<?php echo e(route('admin.services.edit', $service->id)); ?>" class="btn btn-warning btn-sm">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <form action="<?php echo e(route('admin.services.destroy', $service->id)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this service?')">
                                    <i class="fas fa-trash"></i> Delete
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
    <?php else: ?>
    <div class="empty-state">
        <i class="fas fa-cogs"></i>
        <h3>No Services Yet</h3>
        <p class="text-muted">Start by adding your first service</p>
        <a href="<?php echo e(route('admin.services.create')); ?>" class="btn btn-primary mt-3">
            <i class="fas fa-plus"></i> Add First Service
        </a>
    </div>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
<?php echo $__env->make('admin.services.styles', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('scripts'); ?>
<?php echo $__env->make('admin.services.indexScripts', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Shahm.s\Desktop\MyPortfilio\laravel\resources\views/admin/services/index.blade.php ENDPATH**/ ?>