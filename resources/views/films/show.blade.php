<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initialscale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title>Laravel</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center">PELÍCULA</h1>
        <div class="card">
            <div class="card-header">
                <h1 class="text-center">{{$film->title}} - {{$film->year}}</h1>
            </div>
            <div class="card-body">
                <p class="text-center">{{$film->description}}</p>
            </div>
        </div>
    </div>
</body>
</html>