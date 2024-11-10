

<?php $__env->startSection('title', 'Welcome Page'); ?>

<?php $__env->startSection('content'); ?>
    <a href="your-link-here" class="card"> 
    <div class="card home">
        <img src="ZarWho.jpg" alt="Descriptive Text for Card Image">
    </div>
        <div class="card-content">
            <h3 class="card-title">Quintanilla, Lord Zaro Fiber A.</h3> 
            <p class="card-text">0991 776 8905</p> 
            <p class="card-text">lzfaq2022-9369-17258@bicol-u.edu.ph</p> 
        </div>
    </a>
    
    <div class="container-home">
        <h2>WebDev portfolio Lab Acts 1-4</h2>
        <p>
            Welcome everyone! This webpage is my portfolio on lab activities 1-4. The problems that I encountered are the following:
            The proper file path of the SQLite database. When sharing the code and trying to run it on our own PCs and laptops, we tend to encounter issues where the database doesn't exist or the file path is wrong. 
            We have also fixed the `php.ini` file by changing the `variables_order` to "GPCS". But most importantly, I/we learned how to properly use the Laravel framework for our own convenience.
        </p>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('components.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Richard Bilan\Documents\GitHub\WebDevFinalProj\FinalProject\resources\views/Index.blade.php ENDPATH**/ ?>