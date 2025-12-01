

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


    <form action="<?php echo e(route('admin.hero.update')); ?>" method="POST" enctype="multipart/form-data" class="hero-form">
        <?php echo csrf_field(); ?>
        
        <div class="form-section">
            <h3>Basic Information</h3>
            <div class="row">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" name="name" id="name" value="<?php echo e(old('name', $hero->name)); ?>" placeholder="Enter your full name">
                </div>

                <div class="form-group">
                    <label for="role">Professional Role</label>
                    <input type="text" name="role" id="role" value="<?php echo e(old('role', $hero->role)); ?>" placeholder="e.g. Full Stack Developer">
                </div>
            </div>

            <div class="form-group">
                <label for="bio">Professional Bio</label>
                <textarea name="bio" id="bio" placeholder="Write a compelling introduction about yourself..."><?php echo e(old('bio', $hero->bio)); ?></textarea>
            </div>
        </div>

        <div class="form-section">
            <h3>Media & Files</h3>
            <div class="row">
                <div class="form-group">
                    <label>Profile Image</label>
                    <input type="file" name="profile_image" accept="image/*">
                    <?php if($hero->profile_image): ?>
                        <div class="file-info">
                            <i class="fas fa-image"></i>
                            Current: <?php echo e(basename($hero->profile_image)); ?>

                        </div>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label>CV Document</label>
                    <input type="file" name="cv_file" accept=".pdf,.doc,.docx">
                    <?php if($hero->cv_file): ?>
                        <div class="file-info">
                            <i class="fas fa-file-pdf"></i>
                            Current: <?php echo e(basename($hero->cv_file)); ?>

                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <div class="form-section">
            <h3>Availability</h3>
            <div class="toggle-group">
                <label class="switch">
                    <input type="checkbox" name="open_to_work" <?php echo e($hero->open_to_work ? 'checked' : ''); ?>>
                    <span class="slider"></span>
                </label>
                <span class="toggle-label">Open to work opportunities</span>
            </div>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i> Save Changes
            </button>
            <a href="<?php echo e(route('admin.dashboard')); ?>" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Back to Dashboard
            </a>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
<style>
    .card {
        background: var(--dark-card);
        border-radius: var(--border-radius);
        padding: 25px;
        border: 1px solid var(--border);
        max-width: 900px;
    }

    h1 {
        color: var(--primary-light);
        margin-bottom: 8px;
        font-size: 24px;
        font-weight: 600;
    }

    .card > p {
        color: var(--text-muted);
        margin-bottom: 20px;
        font-size: 14px;
    }

    /* Hero Preview */

    .preview-card {
        display: flex;
        justify-content: between;
        align-items: center;
        gap: 20px;
    }

    .preview-header {
        display: flex;
        align-items: center;
        gap: 15px;
        flex: 1;
    }

    .preview-avatar {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        border: 3px solid var(--primary);
        object-fit: cover;
    }

    .preview-info h3 {
        color: var(--text);
        font-size: 20px;
        margin-bottom: 5px;
    }

    .preview-info .role {
        color: var(--primary-light);
        font-weight: 600;
        margin-bottom: 8px;
    }

    .preview-info .bio {
        color: var(--text-muted);
        font-size: 14px;
        line-height: 1.4;
    }

    .preview-actions {
        display: flex;
        gap: 10px;
        align-items: center;
    }

    .badge.available {
        background: var(--success-bg);
        color: var(--success-text);
        padding: 6px 12px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 600;
    }

    /* Form Styles */
    .form-section {
        margin-bottom: 25px;
        padding-bottom: 20px;
        border-bottom: 1px solid var(--border);
    }

    .form-section h3 {
        color: var(--primary-light);
        font-size: 18px;
        margin-bottom: 15px;
        font-weight: 600;
    }

    .form-section:last-child {
        border-bottom: none;
    }

    .row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 15px;
    }

    .form-group {
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    label {
        font-size: 14px;
        font-weight: 600;
        color: var(--text);
    }

    input[type="text"],
    textarea,
    input[type="file"] {
        width: 100%;
        border-radius: var(--border-radius);
        border: 1px solid var(--border);
        background: rgba(30, 41, 59, 0.5);
        color: var(--text);
        padding: 12px;
        font-size: 14px;
        outline: none;
        transition: var(--transition);
    }

    input[type="text"]:focus,
    textarea:focus {
        border-color: var(--primary);
        box-shadow: 0 0 0 2px rgba(124, 58, 237, 0.1);
    }

    textarea {
        min-height: 100px;
        resize: vertical;
    }

    .file-info {
        font-size: 12px;
        color: var(--text-muted);
        margin-top: 5px;
        display: flex;
        align-items: center;
        gap: 5px;
    }

    /* Buttons */
    .btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 10px 20px;
        border-radius: var(--border-radius);
        text-decoration: none;
        font-weight: 600;
        border: none;
        cursor: pointer;
        transition: var(--transition);
        font-size: 14px;
    }

    .btn-primary {
        background: var(--primary);
        color: white;
    }

    .btn-primary:hover {
        background: var(--primary-dark);
    }

    .btn-secondary {
        background: var(--border);
        color: var(--text);
    }

    .btn-secondary:hover {
        background: var(--text-muted);
    }

    .btn-sm {
        padding: 8px 16px;
        font-size: 13px;
    }

    .form-actions {
        display: flex;
        gap: 10px;
        margin-top: 20px;
    }

    /* Toggle Switch */
    .toggle-group {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .switch {
        position: relative;
        display: inline-block;
        width: 44px;
        height: 24px;
    }

    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: var(--border);
        transition: var(--transition);
        border-radius: 24px;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 18px;
        width: 18px;
        left: 3px;
        bottom: 3px;
        background-color: white;
        transition: var(--transition);
        border-radius: 50%;
    }

    input:checked + .slider {
        background-color: var(--primary);
    }

    input:checked + .slider:before {
        transform: translateX(20px);
    }

    .toggle-label {
        font-size: 14px;
        color: var(--text);
        font-weight: 500;
    }

    /* Success Message */
    .success {
        background: #02f97aff;
        color: var(--success-text);
        border-radius: var(--border-radius);
        padding: 12px 16px;
        font-size: 14px;
        margin-bottom: 20px;
        border: 1px solid rgba(52, 211, 153, 0.2);
        display: flex;
        align-items: center;
        gap: 8px;
        font-weight: bold;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .preview-card {
            flex-direction: column;
            text-align: center;
        }
        
        .preview-header {
            flex-direction: column;
        }
        
        .row {
            grid-template-columns: 1fr;
        }
        
        .form-actions {
            flex-direction: column;
        }
        
        .btn {
            width: 100%;
            justify-content: center;
        }
    }
</style>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Shahm.s\Desktop\MyPortfilio\laravel\resources\views/admin/hero/edit.blade.php ENDPATH**/ ?>