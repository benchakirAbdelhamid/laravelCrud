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
    la variable vaut2 ==> {{$v}}

    <hr>
    <!-- if -->
    <?php $note = 5.02;  ?>
    @if ($note >=10)
    <p>admis</p>
    @elseif ($note >=0)
    <p>not admin</p>
    @else
    <p>error</p>
    @endif
    <hr>
    <!-- swith -->
    @switch($note)
    @case($note >= 10)
    <p>admis</p>
    @break
    @case($note >= 0)
    <p>not admin</p>
    @break
    @default
    <p>error</p>
    @endswitch
    <hr>
    <!-- isset -->
    <?php $produit = 'montre'; ?>
    @isset($produit)
    <p>le produit existe</p>
    @endisset
    <hr>
    <hr>
    <!-- empty -->
    <?php $produitt = ''; ?>
    @empty($produitt)
    <p>le produit n'existe pas</p>
    @endempty
    <hr>
    <!-- foreach -->
    <?php $names = ['ahmad', 'khalid', 'omar'] ?>
    @foreach ( $names as $n)
    <p>nom : {{$n}} </p>
    @endforeach
    <hr>
    <!-- forele -->
    @php $notes = [10, 15, 18, 14] @endphp
    @forelse ( $notes as $n )
    <p> {{$n}} </p>
    @empty
    <p>note existe empty array </p>
    @endforelse
    <hr>
    <!-- foreach and methode loop -->
    @php $days = ['lundi','mardi','mercredi','jeudi','vendredi','samedi','dimanche']  @endphp
    @foreach ($days as $day)
        @if ($loop->first)
        <p>le premier jour de la semaine : {{$day}} </p>
        @endif
        @if ($loop->last)
        <p>le dernier jour de la semaine : {{$day}} </p>
        @endif
    @endforeach
    <hr>
    <!-- for -->
    <?php $numbers = [12, 25, 52] ?>
    @for ($i = 0 ; $i< count($numbers);$i++ ) <p> Nomber : {{$numbers[$i]}} </p>
        @endfor

        <hr>
        <!-- while -->
        <?php $v = 1; ?>
        @while ($v <= 3) <p>$i est egale a {{$v++}} </p>
            @endwhile
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