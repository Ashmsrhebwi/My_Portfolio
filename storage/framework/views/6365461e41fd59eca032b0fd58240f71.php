

<?php $__env->startSection('title', 'Manage Admins'); ?>

<?php $__env->startSection('content'); ?>
<div class="card">
    <h1>Manage Admins</h1>
    <span class="text-muted">Add, edit or remove admin users</span>
    
    <a href="<?php echo e(route('admin.admins.create')); ?>" class="btn btn-primary mb-4">
        <i class="fas fa-plus"></i> Add New Admin
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

    <?php if($admins->count() > 0): ?>
    <div class="table-container">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $admins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $admin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($admin->id); ?></td>
                    <td>
                        <div class="d-flex align-items-center gap-3">
                            <div class="admin-avatar">
                                <?php echo e(strtoupper(substr($admin->name, 0, 1))); ?>

                            </div>
                            <span><?php echo e($admin->name); ?></span>
                            <?php if($admin->id == auth()->guard('admin')->id()): ?>
                            <span class="badge bg-primary">You</span>
                            <?php endif; ?>
                        </div>
                    </td>
                    <td><?php echo e($admin->email); ?></td>
                    <td>
                        <?php if($admin->created_at): ?>
                            <?php echo e($admin->created_at->format('Y-m-d')); ?>

                        <?php else: ?>
                            <span class="text-muted">N/A</span>
                        <?php endif; ?>
                    </td>
                    <td>
                        <div class="actions">
                            <a href="<?php echo e(route('admin.admins.edit', $admin->id)); ?>" 
                               class="btn btn-warning btn-sm">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <?php if($admin->id != auth()->guard('admin')->id()): ?>
                            <form action="<?php echo e(route('admin.admins.destroy', $admin->id)); ?>" 
                                  method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button class="btn btn-danger btn-sm" 
                                        onclick="return confirm('Are you sure you want to delete this admin?')">
                                    <i class="fas fa-trash"></i> Delete
                                </button>
                            </form>
                            <?php endif; ?>
                        </div>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
    <?php else: ?>
    <div class="empty-state">
        <i class="fas fa-users"></i>
        <h3>No Admins Yet</h3>
        <p class="text-muted">Start by adding your first admin</p>
        <a href="<?php echo e(route('admin.admins.create')); ?>" class="btn btn-primary mt-3">
            <i class="fas fa-plus"></i> Add First Admin
        </a>
    </div>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
<?php echo $__env->make('admin.admins.styles', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Shahm.s\Desktop\MyPortfilio\laravel\resources\views/admin/admins/index.blade.php ENDPATH**/ ?>