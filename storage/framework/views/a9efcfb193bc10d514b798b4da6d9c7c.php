

<?php $__env->startSection('content'); ?>
<div class="card">
    <h1>Add New Service</h1>
    
    <form action="<?php echo e(route('admin.services.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        
        <div class="form-group">
            <label for="name">Service Name *</label>
            <input type="text" name="name" id="name" class="form-control" value="<?php echo e(old('name')); ?>" required>
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
            <label for="icon">Icon Class *</label>
            <input type="text" name="icon" id="icon" class="form-control" value="<?php echo e(old('icon')); ?>" required placeholder="fas fa-cog">
            <small class="text-muted">Enter Font Awesome icon class (e.g., fas fa-cog, fas fa-laptop-code)</small>
            <?php $__errorArgs = ['icon'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="text-danger"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            
            <div class="icon-preview mt-2">
                <h6>Preview:</h6>
                <div class="preview-box">
                    <i id="icon-preview" class="fas fa-cog"></i>
                    <span id="icon-text">fas fa-cog</span>
                </div>
            </div>
        </div>
        
        <div class="form-actions">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i> Save Service
            </button>
            <a href="<?php echo e(route('admin.services.index')); ?>" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Cancel
            </a>
        </div>
    </form>
</div>



<?php $__env->startPush('styles'); ?>
<style>
    .card {
        background: var(--dark-card);
        border-radius: var(--border-radius);
        padding: 30px;
        border: 1px solid var(--border);
        max-width: 600px;
        margin: 0 auto;
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
        font-size: 14px;
    }

    .btn-primary {
        background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
        color: white;
    }

    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(124, 58, 237, 0.4);
    }

    .btn-secondary {
        background: var(--border);
        color: var(--text);
    }

    .form-group {
        margin-bottom: 25px;
    }

    label {
        display: block;
        margin-bottom: 8px;
        color: var(--text);
        font-weight: 500;
        font-size: 14px;
    }

    input[type="text"] {
        width: 100%;
        padding: 14px 16px;
        border-radius: var(--border-radius);
        border: 1px solid var(--border);
        background: rgba(30, 41, 59, 0.5);
        color: var(--text);
        font-size: 15px;
        transition: var(--transition);
    }

    input[type="text"]:focus {
        outline: none;
        border-color: var(--primary);
        box-shadow: 0 0 0 3px rgba(124, 58, 237, 0.1);
    }

    .form-actions {
        display: flex;
        gap: 12px;
        margin-top: 30px;
        flex-wrap: wrap;
    }

    .text-muted {
        color: var(--text-muted);
        font-size: 13px;
        margin-top: 5px;
    }

    @media (max-width: 768px) {
        .card {
            padding: 25px;
            margin: 0;
        }
        
        .form-actions {
            flex-direction: column;
        }
        
        .btn {
            width: 100%;
            justify-content: center;
            padding: 14px 20px;
        }
    }

    @media (max-width: 480px) {
        .card {
            padding: 20px;
        }
        
        h1 {
            font-size: 22px;
        }
        
        input[type="text"] {
            padding: 12px 14px;
            font-size: 14px;
        }
    }
    .preview-box {
    padding: 15px;
    border: 1px solid #ddd;
    border-radius: 5px;
    background: #f9f9f9;
    display: inline-flex;
    align-items: center;
    gap: 10px;
}

#icon-preview {
    font-size: 24px;
    color: #007bff;
}
.preview-box {
    padding: 15px;
    border: 1px solid #ddd;
    border-radius: 5px;
    background: #f9f9f9;
    display: inline-flex;
    align-items: center;
    gap: 10px;
}

#icon-preview {
    font-size: 24px;
    color: #007bff;
}
.preview-box {
    padding: 15px;
    border: 1px solid #ddd;
    border-radius: 5px;
    background: #f9f9f9;
    display: inline-flex;
    align-items: center;
    gap: 10px;
}

#icon-preview {
    font-size: 24px;
    color: #007bff;
}

</style>
<?php $__env->stopPush(); ?>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const iconInput = document.getElementById('icon');
    const iconPreview = document.getElementById('icon-preview');
    const iconText = document.getElementById('icon-text');
    
    iconInput.addEventListener('input', function() {
        const iconClass = this.value.trim();
        iconPreview.className = iconClass;
        iconText.textContent = iconClass;
    });
});
document.addEventListener('DOMContentLoaded', function() {
    const iconInput = document.getElementById('icon');
    const iconPreview = document.getElementById('icon-preview');
    const iconText = document.getElementById('icon-text');
    
    iconInput.addEventListener('input', function() {
        const iconClass = this.value.trim();
        iconPreview.className = iconClass;
        iconText.textContent = iconClass;
    });
});
document.addEventListener('DOMContentLoaded', function() {
    const iconInput = document.getElementById('icon');
    const iconPreview = document.getElementById('icon-preview');
    const iconText = document.getElementById('icon-text');
    
    iconInput.addEventListener('input', function() {
        const iconClass = this.value.trim();
        iconPreview.className = iconClass;
        iconText.textContent = iconClass;
    });
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Shahm.s\Desktop\MyPortfilio\laravel\resources\views\admin\services\create.blade.php ENDPATH**/ ?>