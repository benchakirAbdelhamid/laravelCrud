<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php $v = 20 ?>
    la variable vaut2 ==> <?php echo e($v); ?>


    <hr>
    <!-- if -->
    <?php $note = 5.02;  ?>
    <?php if($note >=10): ?>
    <p>admis</p>
    <?php elseif($note >=0): ?>
    <p>not admin</p>
    <?php else: ?>
    <p>error</p>
    <?php endif; ?>
    <hr>
    <!-- swith -->
    <?php switch($note):
    case ($note >= 10): ?>
    <p>admis</p>
    <?php break; ?>
    <?php case ($note >= 0): ?>
    <p>not admin</p>
    <?php break; ?>
    <?php default: ?>
    <p>error</p>
    <?php endswitch; ?>
    <hr>
    <!-- isset -->
    <?php $produit = 'montre'; ?>
    <?php if(isset($produit)): ?>
    <p>le produit existe</p>
    <?php endif; ?>
    <hr>
    <hr>
    <!-- empty -->
    <?php $produitt = ''; ?>
    <?php if(empty($produitt)): ?>
    <p>le produit n'existe pas</p>
    <?php endif; ?>
    <hr>
    <!-- foreach -->
    <?php $names = ['ahmad', 'khalid', 'omar'] ?>
    <?php $__currentLoopData = $names; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $n): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <p>nom : <?php echo e($n); ?> </p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <hr>
    <!-- forele -->
    <?php $notes = [10, 15, 18, 14] ?>
    <?php $__empty_1 = true; $__currentLoopData = $notes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $n): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <p> <?php echo e($n); ?> </p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <p>note existe empty array </p>
    <?php endif; ?>
    <hr>
    <!-- foreach and methode loop -->
    <?php $days = ['lundi','mardi','mercredi','jeudi','vendredi','samedi','dimanche']  ?>
    <?php $__currentLoopData = $days; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $day): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($loop->first): ?>
        <p>le premier jour de la semaine : <?php echo e($day); ?> </p>
        <?php endif; ?>
        <?php if($loop->last): ?>
        <p>le dernier jour de la semaine : <?php echo e($day); ?> </p>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <hr>
    <!-- for -->
    <?php $numbers = [12, 25, 52] ?>
    <?php for($i = 0 ; $i< count($numbers);$i++ ): ?> <p> Nomber : <?php echo e($numbers[$i]); ?> </p>
        <?php endfor; ?>

        <hr>
        <!-- while -->
        <?php $v = 1; ?>
        <?php while($v <= 3): ?> <p>$i est egale a <?php echo e($v++); ?> </p>
            <?php endwhile; ?>
            <hr>



            <?php

            $value = 500;
            echo 'value ===> : ' . $value;
            echo '<hr/>';
            for ($i = 0; $i < 10; $i++) {
                echo  $i . '<br/>';
            }
            ?>

</body>

</html><?php /**PATH C:\xampp\htdocs\project-name\resources\views/home2.blade.php ENDPATH**/ ?>