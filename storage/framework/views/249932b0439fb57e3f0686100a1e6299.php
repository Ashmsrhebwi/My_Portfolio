
<?php $__env->startPush('scripts'); ?>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const iconInput = document.getElementById('icon');
    const iconPreview = document.getElementById('icon-preview');
    const iconText = document.getElementById('icon-text');
    
    if (iconInput && iconPreview && iconText) {
        iconInput.addEventListener('input', function() {
            const iconClass = this.value.trim();
            iconPreview.className = iconClass;
            iconText.textContent = iconClass;
        });
        
        // Auto focus on icon input فقط لصفحة الإنشاء
        <?php if(request()->is('*services/create')): ?>
        iconInput.focus();
        <?php endif; ?>
    }
});
</script>
<?php $__env->stopPush(); ?><?php /**PATH C:\Users\Shahm.s\Desktop\MyPortfilio\laravel\resources\views/admin/services/editScripts.blade.php ENDPATH**/ ?>