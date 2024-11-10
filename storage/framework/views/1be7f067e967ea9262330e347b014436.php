

<?php $__env->startSection('title', 'Login'); ?>

<?php $__env->startSection('content'); ?>
<header>
    <nav class="navbar">
        <div class="navdiv">
            <div class="logo"><a href="<?php echo e(url('/')); ?>">login</a></div>
                <ul>
                </ul>
         </div>
    </nav>
    </header>

    
    <main>
        <?php echo $__env->yieldContent('content'); ?>
        <main>
    <div class="login-container">
        <h2>Login</h2>
        <form action="<?php echo e(route('login')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
            </div>
            <button type="submit" class="login-btn">Login</button>
        </form>
    </div>
</main>
    </main>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 My WebDev Portfolio. All Rights Reserved.</p>
    </footer>
</body>
</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('components.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Richard Bilan\Documents\GitHub\WebDevFinalProj\resources\views/login.blade.php ENDPATH**/ ?>