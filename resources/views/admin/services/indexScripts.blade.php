{{-- resources/views/admin/services/index.scripts.blade.php --}}
@push('scripts')
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
@endpush