

<?php $__env->startSection('title', 'Edit Hero Section'); ?>

<?php $__env->startSection('content'); ?>
<div class="card">
    <h1>Edit Hero Section</h1>
    <p>Update your portfolio's main presentation section</p>

    <?php if(session('success')): ?>
        <div class="success">
            <i class="fas fa-check-circle"></i>
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <!-- Preview Section -->
    <div class="preview-card">
        <div class="preview-header">
            <?php if($hero->profile_image): ?>
                <img src="<?php echo e(asset('storage/' . $hero->profile_image)); ?>" 
                     class="preview-avatar" 
                     alt="<?php echo e($hero->name); ?>">
            <?php else: ?>
                <div class="preview-avatar" style="display: flex; align-items: center; justify-content: center; background: var(--primary);">
                    <i class="fas fa-user fa-2x" style="color: white;"></i>
                </div>
            <?php endif; ?>
            
            <div class="preview-info">
                <h3><?php echo e($hero->name); ?></h3>
                <div class="role"><?php echo e($hero->role); ?></div>
                <div class="bio"><?php echo e(Str::limit($hero->bio, 100)); ?></div>
            </div>
        </div>
        
        <div class="preview-actions">
            <?php if($hero->open_to_work): ?>
                <span class="badge available">
                    <i class="fas fa-circle fa-xs"></i> Open to Work
                </span>
            <?php endif; ?>
            
            <?php if($hero->cv_file): ?>
                <a href="<?php echo e(route('hero.downloadCv', $hero->cv_file)); ?>" 
                   class="btn btn-sm btn-outline-primary">
                    <i class="fas fa-download"></i> Download CV
                </a>
            <?php endif; ?>
        </div>
    </div>

    <!-- Edit Form -->
    <form action="<?php echo e(route('admin.hero.update')); ?>" method="POST" enctype="multipart/form-data" class="hero-form">
        <?php echo csrf_field(); ?>
        
        <div class="form-section">
            <h3>Basic Information</h3>
            <div class="row">
                <div class="form-group">
                    <label for="name">Full Name *</label>
                    <input type="text" name="name" id="name" 
                           value="<?php echo e(old('name', $hero->name)); ?>" 
                           placeholder="Enter your full name"
                           required>
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
                    <label for="role">Professional Role *</label>
                    <input type="text" name="role" id="role" 
                           value="<?php echo e(old('role', $hero->role)); ?>" 
                           placeholder="e.g. Full Stack Developer"
                           required>
                    <?php $__errorArgs = ['role'];
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
            </div>

            <div class="form-group">
                <label for="bio">Professional Bio</label>
                <textarea name="bio" id="bio" 
                          placeholder="Write a compelling introduction about yourself..."
                          rows="4"><?php echo e(old('bio', $hero->bio)); ?></textarea>
                <?php $__errorArgs = ['bio'];
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
        </div>

        <div class="form-section">
            <h3>Media & Files</h3>
            <div class="row">
                <div class="form-group">
                    <label for="profile_image">Profile Image</label>
                    <input type="file" name="profile_image" id="profile_image" 
                           accept="image/*" class="form-control">
                    <?php $__errorArgs = ['profile_image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger"><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <?php if($hero->profile_image): ?>
                        <div class="file-info">
                            <i class="fas fa-image"></i>
                            <span>Current: <?php echo e(basename($hero->profile_image)); ?></span>
                        </div>
                    <?php endif; ?>
                    <small class="text-muted">Recommended: 400x400px, JPG or PNG</small>
                </div>

                <div class="form-group">
                    <label for="cv_file">CV Document</label>
                    <input type="file" name="cv_file" id="cv_file" 
                           accept=".pdf,.doc,.docx" class="form-control">
                    <?php $__errorArgs = ['cv_file'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger"><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <?php if($hero->cv_file): ?>
                        <div class="file-info">
                            <i class="fas fa-file-pdf"></i>
                            <span>Current: <?php echo e(basename($hero->cv_file)); ?></span>
                        </div>
                    <?php endif; ?>
                    <small class="text-muted">Max: 5MB, PDF/DOC/DOCX</small>
                </div>
            </div>
        </div>

        <div class="form-section">
            <h3>Availability</h3>
            <div class="toggle-group">
                <label class="switch">
                    <input type="checkbox" name="open_to_work" 
                           id="open_to_work" 
                           <?php echo e($hero->open_to_work ? 'checked' : ''); ?>>
                    <span class="slider"></span>
                </label>
                <span class="toggle-label">Open to work opportunities</span>
            </div>
            <small class="text-muted">When enabled, a badge will appear on your portfolio</small>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i> Save Changes
            </button>
            <a href="<?php echo e(route('admin.dashboard.dashboard')); ?>" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Back to Dashboard
            </a>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
<?php echo $__env->make('admin.hero.styles', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('scripts'); ?>
<?php echo $__env->make('admin.hero.heroScripts', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Shahm.s\Desktop\MyPortfilio\laravel\resources\views/admin/hero/edit.blade.php ENDPATH**/ ?>