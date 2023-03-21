
<?php $__env->startSection('content'); ?>

<h3>form3</h3>
<form  action="/homePage" method="post">
    <?php echo e(csrf_field()); ?>

    <div class="row">
      <div class="form-group col-6 lg">
        <label>Nom & Prenom</label>
        <input type="text" class="form-control" name="prenomNom">
      </div>
      <div class="form-group col-6 lg">
        <label >Email</label>
        <input type="email" class="form-control" name="email">
      </div>
      <div class="form-group col-12 lg">
        <label >Message</label>
        <textarea class="form-control" name="message" rows="4"></textarea>
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    
    </div>

</form>


    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-name\resources\views/pages/Exe3Form.blade.php ENDPATH**/ ?>