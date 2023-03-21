<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/app.css">
    <style>
        body{
            /* background-color:red; */
        }
    </style>
</head>

<body>
    <?php $v = 20 ?>
    <?php echo 'la variable vaut : ' . $v; ?>
    <hr>
    la variable vaut2 ==> {{$v}}
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

</html>