

    
    <?php $__env->startSection("content"); ?>

    <?php if(count($modules)>0): ?>
    <table class="table table-striped table-dark table-hover">
        <thead>
          <tr>
            <th scope="col">codeM</th>
            <th scope="col">Title</th>
            <th scope="col">MH</th>
          </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $modules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($module->codeM); ?></td>
            <td><?php echo e($module->Title); ?></td>
            <td><?php echo e($module->MH); ?></td>
          </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <?php else: ?> 
    <p>pas de modules dans la base de donnes</p>
    <?php endif; ?>

    

    
    
    
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection("title"); ?>


<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-name\resources\views/pages/readData.blade.php ENDPATH**/ ?>