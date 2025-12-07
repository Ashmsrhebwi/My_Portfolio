


<?php $__env->startSection('title', 'Statistics'); ?>

<?php $__env->startSection('content'); ?>
<div class="card">
    <h1>Statistics</h1>
    <p class="text-muted">Manage your portfolio statistics and skills</p>
    
    <a href="<?php echo e(route('admin.statistics.create')); ?>" class="btn btn-primary mb-4">
        <i class="fas fa-plus"></i> Add New Statistic
    </a>

    <?php if($statistics->count() > 0): ?>
    <div class="table-container">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Value</th>
                    <th>Order</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $statistics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($loop->iteration); ?></td>
                    <td>
                        <div class="d-flex align-items-center gap-3">
                            <?php if($stat->icon): ?>
                                <i class="<?php echo e($stat->icon); ?>"></i>
                            <?php endif; ?>
                            <span><?php echo e($stat->title); ?></span>
                        </div>
                    </td>
                    <td>
                        <span class="badge"><?php echo e($stat->value); ?>%</span>
                    </td>
                    <td>
                        <span class="text-muted"><?php echo e($stat->order); ?></span>
                    </td>
                    <td>
                        <div class="actions">
                            <a href="<?php echo e(route('admin.statistics.edit', $stat->id)); ?>" 
                               class="btn btn-warning btn-sm">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <form action="<?php echo e(route('admin.statistics.delete', $stat->id)); ?>" 
                                  method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button class="btn btn-danger btn-sm" 
                                        onclick="return confirm('Are you sure you want to delete this statistic?')">
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
        <i class="fas fa-chart-bar"></i>
        <h3>No Statistics Yet</h3>
        <p class="text-muted">Start by adding your first statistic</p>
        <a href="<?php echo e(route('admin.statistics.create')); ?>" class="btn btn-primary mt-3">
            <i class="fas fa-plus"></i> Add First Statistic
        </a>
    </div>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
<?php echo $__env->make('admin.statistics.styles', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Shahm.s\Desktop\MyPortfilio\laravel\resources\views/admin/statistics/index.blade.php ENDPATH**/ ?>