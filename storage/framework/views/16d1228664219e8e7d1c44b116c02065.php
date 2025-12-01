<form action="<?php echo e(route('contact.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <div class="row g-3">
        <h2>Contact Us</h2>

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" name="phone" id="phone" class="form-control">
        </div>

        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea name="message" id="message" class="form-control" rows="4" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Send Message</button>
    </div>
</form>
<?php /**PATH C:\Users\Shahm.s\Desktop\MyPortfilio\laravel\resources\views\contact.blade.php ENDPATH**/ ?>