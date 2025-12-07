{{-- resources/views/admin/services/scripts.blade.php --}}
@push('scripts')
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
@endpush