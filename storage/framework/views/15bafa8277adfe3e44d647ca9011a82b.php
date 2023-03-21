<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <table border="1">
        <tr>
            <td>Nom et prenom</td>
            <td> <?php echo e($nom); ?> <?php echo e($prenom); ?> </td>
        </tr>
        <tr>
            <td>poste</td>
            <td> <?php echo e($poste); ?> </td>
        </tr>
        <tr>
            <td>Modules</td>
            <td>
                <ul>
                    <!-- <li><?php echo e($Modules[0]); ?> </li>
                    <li><?php echo e($Modules[1]); ?></li>
                    <li><?php echo e($Modules[2]); ?> </li> -->

                    <?php $__currentLoopData = $Modules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li> <?php echo e($m); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </td>
        </tr>
    </table>


    <select>
        <?php for($i = 0 ; $i<10 ; $i++): ?> <option><?php echo e($i); ?></option>
            <?php endfor; ?>
    </select>
    <hr>
    <select>
        <?php for($i = 1 ; $i<1000 ; $i=$i+2): ?> <option><?php echo e($i); ?></option>
            <?php endfor; ?>
    </select>
    <hr>
    <?php for($i = 0 ; $i<10 ; $i++): ?> <?php if($i%2==1): ?> <option><?php echo e($i); ?></option>
        <?php endif; ?>
        <?php endfor; ?>



</body>

</html><?php /**PATH C:\xampp\htdocs\project-name\resources\views/affichage.blade.php ENDPATH**/ ?>