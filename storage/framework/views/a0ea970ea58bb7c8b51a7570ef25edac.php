

<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>
<header>
    <nav class="navbar">
        <div class="navdiv">
            <div class="logo"><a href="<?php echo e(url('/')); ?>">?Dashboard</a></div>
            <ul></ul>
         </div>
    </nav>
</header>

<main>
<?php $__env->startSection('content'); ?>
     
    <?php $__env->stopSection(); ?>
</main>

<!-- Footer Section -->
<footer>
    <p>&copy; 2024 My WebDev Portfolio. All Rights Reserved.</p>
</footer>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('components.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Richard Bilan\Documents\GitHub\WebDevFinalProj\resources\views/dashboard.blade.php ENDPATH**/ ?>