<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title> Portfolio</title>
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>
        body {
            background: #c7b39b url(images/background.jpg);
            color: #FFFFFF;
        }
    </style>
</head>
<body>

<a href="/" class="btn btn-default">Перейти к новостям</a></p>

@include('layouts.headerNavigation')
<br>
<br>
<div class="jumbarton">
    <div class="container">

    </div>
</div>
<div class="container">
    @yield('content')

</div>

</body>
</html>
