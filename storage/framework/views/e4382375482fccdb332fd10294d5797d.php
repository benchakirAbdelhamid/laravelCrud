<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> <?php echo $__env->yieldContent('title','Page'); ?></title>
    <link rel="stylesheet" href="bootstrap.min.css">


</head>
<body>
    <h1 class="text-center m-5" >welcome to my application</h1>
    
    <div id="main" class="container">
        <?php echo $__env->yieldContent('content'); ?>
        
    </div>
    


    
</body>
</html><?php /**PATH C:\xampp\htdocs\project-name\resources\views/layouts/default.blade.php ENDPATH**/ ?>