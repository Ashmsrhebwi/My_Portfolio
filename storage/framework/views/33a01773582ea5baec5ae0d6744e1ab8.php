

<?php $__env->startSection('content'); ?>
<div class="card">
    <h1>Our Services</h1>
    <p class="text-muted">Manage your portfolio services and offerings</p>
    
    <a href="<?php echo e(route('admin.services.create')); ?>" class="btn btn-primary mb-3">
        <i class="fas fa-plus"></i> Add New Service
    </a>

    <?php if($services->count() > 0): ?>
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
                <td><?php echo e($service->name); ?></td>
                <td>
                    <?php if($service->icon): ?>
                        <i class="<?php echo e($service->icon); ?>"></i>
                        <span class="text-muted" style="margin-left: 8px;"><?php echo e($service->icon); ?></span>
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
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Delete this service?')">
                                <i class="fas fa-trash"></i> Delete
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
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
<style>
    .card {
        background: var(--dark-card);
        border-radius: var(--border-radius);
        padding: 30px;
        border: 1px solid var(--border);
    }

    h1 {
        color: var(--primary-light);
        margin-bottom: 10px;
        font-size: 28px;
    }

    .btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 12px 24px;
        border-radius: var(--border-radius);
        text-decoration: none;
        font-weight: 600;
        border: none;
        cursor: pointer;
        transition: var(--transition);
    }

    .btn-primary {
        background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
        color: white;
    }

    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(124, 58, 237, 0.4);
    }

    .btn-warning {
        background: #f59e0b;
        color: white;
    }

    .btn-danger {
        background: #ef4444;
        color: white;
    }

    .btn-sm {
        padding: 8px 16px;
        font-size: 13px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        background: var(--dark-card);
        border-radius: var(--border-radius);
        overflow: hidden;
    }

    th, td {
        padding: 15px 20px;
        text-align: left;
        border-bottom: 1px solid var(--border);
    }

    th {
        background: rgba(51, 65, 85, 0.5);
        color: var(--primary-light);
        font-weight: 600;
    }

    tr:hover {
        background: rgba(124, 58, 237, 0.05);
    }

    .actions {
        display: flex;
        gap: 8px;
    }

    .empty-state {
        text-align: center;
        padding: 60px 20px;
        color: var(--text-muted);
    }

    .empty-state i {
        font-size: 48px;
        margin-bottom: 15px;
        opacity: 0.5;
    }

    .mb-3 {
        margin-bottom: 20px;
    }

    .text-muted {
        color: var(--text-muted);
    }

    @media (max-width: 768px) {
        .actions {
            flex-direction: column;
        }
        
        .btn-sm {
            width: 100%;
            justify-content: center;
        }
    }
</style>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Shahm.s\Desktop\MyPortfilio\laravel\resources\views/admin/services/index.blade.php ENDPATH**/ ?>