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
        <div class="row">
            @foreach ($films as $film)
                <div class="card w-25 m-1">
                    <div class="card-header">
                        <h2>{{$film->title}} ({{$film->year}})</h2>
                    </div>
                    <div class="card-body">
                        <p>{{$film->description}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>