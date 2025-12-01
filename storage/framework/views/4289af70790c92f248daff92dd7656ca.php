<?php echo $__env->make('frontend.layouts.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<body>
<?php echo $__env->make('frontend.layouts.nav', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<main class="container py-5">

    
    <div class="hero row align-items-center mb-5">
        <div class="col-lg-6">
            <h1 class="fw-bold"><?php echo e($hero->name); ?></h1>
            <h3 class="text-primary"><?php echo e($hero->job_title); ?></h3>

            <?php if($hero->open_to_work): ?>
                <span class="badge bg-success mt-2">
                    <i class="fa-solid fa-user-check"></i> Open To Work
                </span>
            <?php endif; ?>

            <?php if($hero->cv): ?>
                <a href="<?php echo e(asset('storage/' . $hero->cv)); ?>" class="btn btn-primary mt-3" download>
                    <i class="fa-solid fa-download me-1"></i> Download CV
                </a>
            <?php endif; ?>
        </div>

        <div class="col-lg-6">
            <img src="<?php echo e(asset('storage/' . $hero->profile_image)); ?>" class="img-fluid rounded shadow" alt="">
        </div>
    </div>

    
    <div class="row">
        <?php $__currentLoopData = $statistics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-6 col-md-3 mb-4">
                <div class="p-3 bg-dark rounded text-center shadow">
                    <h2 class="fw-bold text-primary"><?php echo e($stat->value); ?>%</h2>
                    <p class="text-white-50 m-0"><?php echo e($stat->title); ?></p>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

</main>

<?php echo $__env->make('frontend.layouts.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</body>
</html>
<?php /**PATH C:\Users\Shahm.s\Desktop\MyPortfilio\laravel\resources\views\home.blade.php ENDPATH**/ ?>