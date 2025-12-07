
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
        
        // Focus on icon input for better UX
        iconInput.focus();
    }
});
</script>
<?php $__env->stopPush(); ?><?php /**PATH C:\Users\Shahm.s\Desktop\MyPortfilio\laravel\resources\views/admin/services/createScripts.blade.php ENDPATH**/ ?>