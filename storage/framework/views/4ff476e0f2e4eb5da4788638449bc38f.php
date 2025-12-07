
<script>
    // Auto focus and move between inputs
    const inputs = document.querySelectorAll('.otp-input input');
    
    inputs.forEach((input, index) => {
        input.addEventListener('input', (e) => {
            if (e.target.value.length === 1) {
                if (index < inputs.length - 1) {
                    inputs[index + 1].focus();
                }
                e.target.classList.add('filled');
            } else {
                e.target.classList.remove('filled');
            }
        });

        input.addEventListener('keydown', (e) => {
            if (e.key === 'Backspace' && e.target.value === '') {
                if (index > 0) {
                    inputs[index - 1].focus();
                }
            }
        });
    });

    // Form submission
    document.querySelector('form').addEventListener('submit', function(e) {
        const otp = Array.from(inputs).map(input => input.value).join('');
        const hiddenInput = document.createElement('input');
        hiddenInput.type = 'hidden';
        hiddenInput.name = 'otp';
        hiddenInput.value = otp;
        this.appendChild(hiddenInput);
    });
</script><?php /**PATH C:\Users\Shahm.s\Desktop\MyPortfilio\laravel\resources\views/admin/dashboard/verifyScripts.blade.php ENDPATH**/ ?>