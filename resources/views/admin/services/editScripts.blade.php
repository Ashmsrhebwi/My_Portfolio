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
        
        // Auto focus on icon input فقط لصفحة الإنشاء
        @if(request()->is('*services/create'))
        iconInput.focus();
        @endif
    }
});
</script>
@endpush