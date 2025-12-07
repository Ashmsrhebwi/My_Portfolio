


<?php $__env->startSection('title', 'Our Works'); ?>

<?php $__env->startSection('content'); ?>
<div class="card">
    <h1>Our Works</h1>
    <p class="text-muted">Manage your portfolio projects and works</p>

    <a href="<?php echo e(route('admin.works.create')); ?>" class="btn btn-primary mb-4">
        <i class="fas fa-plus"></i> Add New Work
    </a>

    <?php if(session('success')): ?>
        <div class="alert alert-success mb-4">
            <i class="fas fa-check-circle"></i> <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <?php if($works->count() > 0): ?>
    <div class="table-container">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Link</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $works; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $work): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($i+1); ?></td>
                    <td>
                        <strong><?php echo e($work->title); ?></strong>
                    </td>
                    <td>
                        <span class="text-muted">
                            <?php echo e(Str::limit($work->description, 50)); ?>

                        </span>
                    </td>
                    <td>
                        <?php if($work->image): ?>
                        <img src="<?php echo e($work->image); ?>" width="60" height="60" 
                             alt="<?php echo e($work->title); ?>">
                        <?php else: ?>
                        <span class="text-muted">No image</span>
                        <?php endif; ?>
                    </td>
                    <td>
                        <?php if($work->link): ?>
                        <a href="<?php echo e($work->link); ?>" target="_blank" class="btn btn-sm btn-outline-primary">
                            <i class="fas fa-external-link-alt"></i> Visit
                        </a>
                        <?php else: ?>
                        <span class="text-muted">No link</span>
                        <?php endif; ?>
                    </td>
                    <td>
                        <div class="actions">
                            <a href="<?php echo e(route('admin.works.edit', $work)); ?>" class="btn btn-warning btn-sm">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <form action="<?php echo e(route('admin.works.destroy', $work)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button class="btn btn-danger btn-sm" 
                                        onclick="return confirm('Are you sure you want to delete this work?')">
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
        <i class="fas fa-briefcase"></i>
        <h3>No Works Yet</h3>
        <p class="text-muted">Start by adding your first project</p>
        <a href="<?php echo e(route('admin.works.create')); ?>" class="btn btn-primary mt-3">
            <i class="fas fa-plus"></i> Add First Work
        </a>
    </div>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
<?php echo $__env->make('admin.works.styles', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Shahm.s\Desktop\MyPortfilio\laravel\resources\views/admin/works/index.blade.php ENDPATH**/ ?>