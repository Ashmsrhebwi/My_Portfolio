<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Message </title>
</head>
<body>
<h2>New Contact Message</h2>

<p><strong>Name:</strong> <?php echo e($contact->name); ?></p>
<p><strong>Email:</strong> <?php echo e($contact->email); ?></p>
<p><strong>Phone:</strong> <?php echo e($contact->phone ?? '-'); ?></p>
<p><strong>Message:</strong></p>
<p><?php echo e($contact->message); ?></p>

</body>
</html><?php /**PATH C:\Users\Shahm.s\Desktop\MyPortfilio\laravel\resources\views\emails\contact.blade.php ENDPATH**/ ?>