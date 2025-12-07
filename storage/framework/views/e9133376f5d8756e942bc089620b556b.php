
<?php $__env->startPush('scripts'); ?>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Add confirmation for delete buttons
    const deleteButtons = document.querySelectorAll('form button[onclick*="confirm"]');
    deleteButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            if (!confirm('Are you sure you want to delete this service?')) {
                e.preventDefault();
            }
        });
    });
});
</script>
<?php $__env->stopPush(); ?><?php /**PATH C:\Users\Shahm.s\Desktop\MyPortfilio\laravel\resources\views/admin/services/indexScripts.blade.php ENDPATH**/ ?>