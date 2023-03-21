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
            <td> {{$nom}} {{$prenom}} </td>
        </tr>
        <tr>
            <td>poste</td>
            <td> {{$poste}} </td>
        </tr>
        <tr>
            <td>Modules</td>
            <td>
                <ul>
                    <!-- <li>{{$Modules[0]}} </li>
                    <li>{{$Modules[1]}}</li>
                    <li>{{$Modules[2]}} </li> -->

                    @foreach ($Modules as $m)
                    <li> {{ $m }}</li>
                    @endforeach
                </ul>
            </td>
        </tr>
    </table>


    <select>
        @for ($i = 0 ; $i<10 ; $i++) <option>{{$i}}</option>
            @endfor
    </select>
    <hr>
    <select>
        @for ($i = 1 ; $i<1000 ; $i=$i+2) <option>{{$i}}</option>
            @endfor
    </select>
    <hr>
    @for ($i = 0 ; $i<10 ; $i++) @if ($i%2==1) <option>{{$i}}</option>
        @endif
        @endfor



</body>

</html>