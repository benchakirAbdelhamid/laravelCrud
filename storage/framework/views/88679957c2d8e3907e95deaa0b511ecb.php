

<?php $__env->startSection('content'); ?>
<p>i am page footer</p>
<h1>la request contient : <?php echo e($n); ?> </h1>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('pageprincipale', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-name\resources\views/footer.blade.php ENDPATH**/ ?>