
<?php $__env->startPush('scripts'); ?>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Preview image on file select
    const profileImageInput = document.getElementById('profile_image');
    const previewAvatar = document.querySelector('.preview-avatar');
    
    if (profileImageInput && previewAvatar) {
        profileImageInput.addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    if (previewAvatar.tagName === 'IMG') {
                        previewAvatar.src = e.target.result;
                    } else {
                        // Replace div with img
                        const newImg = document.createElement('img');
                        newImg.src = e.target.result;
                        newImg.className = 'preview-avatar';
                        newImg.alt = 'Profile Preview';
                        previewAvatar.parentNode.replaceChild(newImg, previewAvatar);
                    }
                }
                reader.readAsDataURL(file);
            }
        });
    }
    
    // Toggle switch animation
    const toggleSwitch = document.getElementById('open_to_work');
    const availabilityBadge = document.querySelector('.badge.available');
    
    if (toggleSwitch && availabilityBadge) {
        toggleSwitch.addEventListener('change', function() {
            if (this.checked) {
                availabilityBadge.style.display = 'inline-flex';
            } else {
                availabilityBadge.style.display = 'none';
            }
        });
    }
});
</script>
<?php $__env->stopPush(); ?><?php /**PATH C:\Users\Shahm.s\Desktop\MyPortfilio\laravel\resources\views/admin/hero/heroScripts.blade.php ENDPATH**/ ?>