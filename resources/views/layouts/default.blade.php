<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title','Page')</title>
    <link rel="stylesheet" href="bootstrap.min.css">


</head>
<body>
    <h1 class="text-center m-5" >welcome to my application</h1>
    {{-- @include('elements.header') --}}
    <div id="main" class="container">
        @yield('content')
        
    </div>
    {{-- @include('elements.footer') --}}


    
</body>
</html>