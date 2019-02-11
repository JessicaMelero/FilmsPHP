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
    <header class="container-fluid">
        <a href="/home" class="text-dark mr-auto"><strong>Home</strong></a>
    </header>
    <div class="container">
        <div class="row justify-content-around ">
            @foreach ($films as $film)
                <div class="card w-25 m-1">
                    <div class="card-header">
                        <h2>{{$film->title}} ({{$film->year}})</h2>

                            <a href="/delete" class="btn btn-danger text-white">Delete</a>

                            <a href="/edit" class="btn btn-secondary text-white">Edit</a>

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